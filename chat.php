<!DOCTYPE html>
<html>
  <head>
    <style>
      #chatContainer {
        width: 500px;
        height: 500px;
        border: 1px solid black;
        margin: 0 auto;
        padding: 10px;
      }

      #chatMessages {
        height: 400px;
        overflow-y: scroll;
        border: 1px solid black;
        padding: 10px;
      }

      #chatInput {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
      }

      #sendButton {
        width: 100%;
        padding: 10px;
        background-color: lightblue;
        border: 1px solid black;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div id="chatContainer">
      <div id="chatMessages">
        <!-- Messages will be displayed here -->
      </div>
      <input type="text" id="chatInput">
      <button id="sendButton">Send</button>
    </div>

    <script src="chat.js"></script>
  </body>
</html>
