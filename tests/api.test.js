const request = require("supertest");

const BASE_URL = "http://localhost:8000"; 

describe("User API Tests", () => {

  test("Should delete a user", async () => {
    const newUser = await request(BASE_URL)
      .post("/users")
      .send({ name: "To Delete", email: `delete+${Date.now()}@example.com`, age: 22 })
      .set("Accept", "application/json");
    
    console.log("User created:", newUser.body);
   
    const userId = newUser.body.id;
    if (!userId || !/^([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})$/.test(userId)) {
      throw new Error("Invalid UUID format for user ID");
    }
    
    console.log("Trying to delete user with ID:", userId);
    
    const deleteResponse = await request(BASE_URL).delete(`/users/${userId}`);

    console.log("Delete response status:", deleteResponse.statusCode);
    console.log("Delete response body:", deleteResponse.body);
    
    expect(deleteResponse.statusCode).toBe(200);
    expect(deleteResponse.body.message).toBe("User deleted successfully");

    const checkUserResponse = await request(BASE_URL).get(`/users/${userId}`);
    expect(checkUserResponse.statusCode).toBe(404);
  });

  test("Should get all users", async () => {
    const response = await request(BASE_URL).get("/users");
    expect(response.statusCode).toBe(200);
    expect(response.body).toBeInstanceOf(Array); 
  });

  test("Should return 404 for non-existing user", async () => {
    const response = await request(BASE_URL).get("/users/999999");
    expect(response.statusCode).toBe(404);
  });

  test("Should delete a user again", async () => {
    const newUser = await request(BASE_URL)
      .post("/users")
      .send({ name: "To Delete", email: "delete@example.com", age: 22 })
      .set("Accept", "application/json");

    const userId = newUser.body.id;
    const deleteResponse = await request(BASE_URL).delete(`/users/${userId}`);
    expect(deleteResponse.statusCode).toBe(200);
    expect(deleteResponse.body.message).toBe("User deleted successfully");

    const checkUserResponse = await request(BASE_URL).get(`/users/${userId}`);
    expect(checkUserResponse.statusCode).toBe(404);
  });
});
