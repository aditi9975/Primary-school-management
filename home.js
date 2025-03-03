document.addEventListener("DOMContentLoaded", function() {
    var cards = document.querySelector(".cards");
    cards.style.opacity = 1; // Show the cards when the page is loaded
  });

  document.addEventListener("DOMContentLoaded", function() {
 var cards = document.querySelector(".cards");
 var observer = new IntersectionObserver(function(entries) {
   if (entries[0].isIntersecting) {
     cards.style.opacity = 1;
     cards.style.transform = "translateY(0)";
   }
 }, { threshold: 0.5 }); // Trigger animation when 50% of the element is visible
 observer.observe(cards);
});
 




document.getElementById("contactForm").addEventListener("submit", function(event) {
 event.preventDefault(); // Prevent form from submitting the default way

 var formData = new FormData(this);

 fetch("contact_form.php", {
     method: "POST",
     body: formData
 })
 .then(response => response.json()) 
 .then(data => {
     if (data.status === "success") {
         // Show success message
         var successMessage = document.getElementById("successMessage");
         successMessage.style.display = "block";
         
         // Hide message after 3 seconds
         setTimeout(() => {
             successMessage.style.display = "none";
         }, 3000);

         // Clear the form fields
         document.getElementById("contactForm").reset();
     } else {
         alert(data.message);
     }
 })
 .catch(error => {
     console.error("Error:", error);
 });
});

    
