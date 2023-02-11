<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Platform</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
  <body>
    <!-- Add Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">NGO Platform</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Profile Creation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Search and Filter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Suggestion Algorithm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Communication Tools</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Community Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">News and Events</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Add Firebase -->
    <script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-firestore.js"></script>
    <script>
        // Initialize Firebase
        var firebaseConfig = {
            apiKey: "AIzaSyB4BSeDms94mbGYQ7Tgw8I5_Lhv7alJ6Ho",
            authDomain: "nit-tri-hack.firebaseapp.com",
            projectId: "nit-tri-hack",
            storageBucket: "nit-tri-hack.appspot.com",
            messagingSenderId: "217933138780",
            appId: "1:217933138780:web:f8774aec99c8ff9132cf99",
            measurementId: "G-N1N2XJXW4X"
        };
        firebase.initializeApp(firebaseConfig);
        var firestore = firebase.firestore();
  
        // Create profiles for NGOs and users
        function createProfile() {
          var ngoProfile = {
            previousWorks: document.getElementById("previousWorks").value,
            endGoal: document.getElementById("endGoal").value,
            plans: document.getElementById("plans").value,
            impact: document.getElementById("impact").value,
            fundingNeeds: document.getElementById("fundingNeeds").value
          };
          var userProfile = {
            donationPreferences: document.getElementById("donationPreferences").value
          };
          firestore.collection("ngo_profiles").add(ngoProfile)
            .then(function (docRef) {
              console.log("NGO profile added with ID: ", docRef.id);
            })
            .catch(function (error) {
              console.error("Error adding NGO profile: ", error);
            });
          firestore.collection("user_profiles").add(userProfile)
            .then(function (docRef) {
              console.log("User profile added with ID: ", docRef.id);
            })
            .catch(function (error) {
              console.error("Error adding user profile: ", error);
            });
        }
  
        // Search and filter NGOs
        function searchNGOs() {
          var location = document.getElementById("location").value;
          var impactArea = document.getElementById("impactArea").value;
          var typeOfNGO = document.getElementById("typeOfNGO").value;
          firestore.collection("ngo_profiles")
            .where("location", "==", location)
            .where("impact", "==", impactArea)
            .where("type", "==", typeOfNGO)
            .get()
            .then(function (querySnapshot) {
              querySnapshot.forEach(function (doc) {
                console.log(doc.id, " => ", doc.data());
              });
            })
            .catch(function (error) {
              console.error("Error searching NGOs: ", error);
            });
        }
  
        // Suggest NGOs
        <!-- function suggestNGOs() {
          var userDonationPreferences = document.getElementById("userDonationPreferences").value;
          firestore.collection("ngo_profiles")
            .where("type", "==", userDonationPreferences)
            .get()
            .then(function (querySnapshot) {
              querySnapshot.forEach(function (doc) {
                console.log("Suggested NGO: ", doc.data());
            });

        } -->
  
        // Community features
        function joinGroup() {
          var groupName = document.getElementById("groupName").value;
          firestore.collection("groups").add({
            name: groupName
          })
            .then(function (docRef) {
              console.log("Group added with ID: ", docRef.id);
            })
            .catch(function (error) {
              console.error("Error adding group: ", error);
            });
        }
  
        // Communication tools
        function sendMessage() {
          var recipient = document.getElementById("recipient").value;
          var message = document.getElementById("message").value;
          firestore.collection("messages").add({
            recipient: recipient,
            message: message
          })
            .then(function (docRef) {
              console.log("Message sent with ID: ", docRef.id);
            })
            .catch(function (error) {
              console.error("Error sending message: ", error);
            });
        }
  
        // News and events
        function addNewsEvent() {
          var title = document.getElementById("title").value;
          var description = document.getElementById("description").value;
          firestore.collection("news_events").add({
            title: title,
            description: description
          })
            .then(function (docRef) {
              console.log("News/event added with ID: ", docRef.id);
            })
            .catch(function (error) {
              console.error("Error adding news/event: ", error);
            });
        }
      </script>
    </body>
  </html>