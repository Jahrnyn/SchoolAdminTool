<x-layout>

<main>
    <section>
        <h2>Student management</h2>
    <div class="student-form">
        <form action="#" method="post">
            <div class="form-row">
              <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" placeholder="Enter first name" required>
              </div>
              <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" placeholder="Enter Last name" required>
              </div>
              <div class="form-group">
                <label for="sign">Sign:</label>
                <input type="text" id="sign" name="sign" placeholder="temporary placeholder to sign" required>
              </div>
              <div class="form-group">
                <label for="group">Group Name:</label>
                <input type="text" id="group" name="group" placeholder="Enter Group name" required>
              </div>
              <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" placeholder="Enter student age" required>
              </div>
            </div>  
            <button type="submit">Add Student</button>
          </form>
    </div>
    </section>
    <section>
        <a href="/" class="link-button">Back to Home</a>
    </section>
</main>

</x-layout>
