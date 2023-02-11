const chatContainer = document.getElementById("chatContainer");
const chatMessages = document.getElementById("chatMessages");
const chatInput = document.getElementById("chatInput");
const sendButton = document.getElementById("sendButton");

// Function to add a message to the chat window
const addMessage = (message) => {
  chatMessages.innerHTML += `<div>${message}</div>`;
};

// Event listener for the send button
sendButton.addEventListener("click", () => {
  addMessage(chatInput.value);
  chatInput.value = "";
});
