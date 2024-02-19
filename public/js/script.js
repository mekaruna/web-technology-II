 // JavaScript for image slideshow
        var slides = document.querySelectorAll('.slide');
        var currentSlide = 0;

        function showSlide(slideIndex) {
            for (var i = 0; i < slides.length; i++) {
                slides[i].classList.remove('active');
            }
            slides[slideIndex].classList.add('active');
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        setInterval(nextSlide, 5000); // Change slide every 5 seconds
// contact form
function showPrompt() {
    var nameInput = document.getElementById("name");
    var subjectInput = document.getElementById("subject");
    var messageInput = document.getElementById("message");
  
    // Retrieve the entered values
    var name = nameInput.value;
    var subject = subjectInput.value;
    var message = messageInput.value;
  
    // Data validation
    if (name === "" || subject === "" || message === "") {
      alert("Please fill in all the required fields.");
      return false;
    }
  
    if (message.length < 15) {
      alert("Message should be at least 15 characters long.");
      return false;
    }
  
    if (message.length > 250) {
      alert("Message cannot exceed 250 characters.");
      return false;
    }
  
    // Display the dialog message
    var promptMessage = "Hello " + name + ", We received your message. We will contact you soon.";
    alert(promptMessage);
  
    // Update word count
    var wordCount = message.trim().split(/\s+/).length;
    var wordCountElement = document.getElementById("word-count");
    wordCountElement.textContent = wordCount + " words";
  
    // Prevent the form from submitting (optional)
    return false;
  }
  
  function blockNumericInput(event) {
    var key = event.which || event.keyCode;
    if (key >= 48 && key <= 57) {
      event.preventDefault();
      return false;
    }
  }
  document.addEventListener("DOMContentLoaded", function() {
    const reservationModal = document.getElementById("reservationModal");
    const closeButton = document.getElementsByClassName("closen")[0];
    const reservationLink = document.querySelector("nav ul li a[href='#']");
  
    closeButton.addEventListener("click", function() {
      reservationModal.style.display = "none";
    });
  
    reservationLink.addEventListener("click", function(event) {
      event.preventDefault(); // Prevent the default link behavior
      reservationModal.style.display = "block";
    });
  
    window.addEventListener("click", function(event) {
      if (event.target === reservationModal) {
        reservationModal.style.display = "none";
      }
    });
  
    const reservationForm = document.getElementById("reservationForm");
    const nameInput = document.getElementById("name");
    const phoneNumberInput = document.getElementById("phoneNumber");
    const reservationDateInput = document.getElementById("reservationDate");
  
    nameInput.addEventListener("input", function() {
      const sanitizedValue = nameInput.value.replace(/\d/g, '');
      nameInput.value = sanitizedValue;
    });
  
    phoneNumberInput.addEventListener("input", function() {
      const sanitizedValue = phoneNumberInput.value.replace(/\D/g, '');
      phoneNumberInput.value = sanitizedValue;
    });
  
    reservationForm.addEventListener("submit", function(event) {
      event.preventDefault();
  
      const name = nameInput.value;
      const phoneNumber = phoneNumberInput.value;
      const reservationDate = reservationDateInput.value;
      const reservationTime = document.getElementById("reservationTime").value;
  
      // Name validation
   
  
      // Phone number validation
      if (!phoneNumber.trim()) {
        alert("Please enter your phone number.");
        return;
      }
  
      if (phoneNumber.length !== 10) {
        alert("Phone number should have exactly 10 digits.");
        return;
      }
  
      // Reservation date validation
      const currentDate = new Date().toISOString().split('T')[0];
      if (reservationDate < currentDate) {
        alert("Please select a correct date for the reservation.");
        return;
      }
  
      // Reservation message
      const reservationMessage = `Hello ${name}, your reservation has been successfully made. Please be on time.`;
  
      alert(reservationMessage);
      // Close the modal
      reservationModal.style.display = "none";
    });
  });
  


 
 // Access the testimonial items
 let testimonialItems = document.querySelectorAll('.testimonial-item');
 // Access the indicators
 let indicators = document.querySelectorAll('.indicator');

 let currentTestimonial = 0;

 // Function to switch between testimonial items
 function switchTest(testimonialIndex) {
   testimonialItems[currentTestimonial].classList.remove('active');
   testimonialItems[testimonialIndex].classList.add('active');
   currentTestimonial = testimonialIndex;
   updateIndicators();
 }

 // Function to update the active class for indicators
 function updateIndicators() {
   for (let i = 0; i < indicators.length; i++) {
     indicators[i].classList.remove('active');
   }
   indicators[currentTestimonial].classList.add('active');
 }

 // Auto-sliding testimonial
 setInterval(() => {
   let nextTestimonial = (currentTestimonial + 1) % testimonialItems.length;
   switchTest(nextTestimonial);
 }, 5000);
 function rotateIcon(element) {
  element.querySelector('.strength-icon').classList.add('rotate');
}

let rotationInterval;

 function rotateIcon(element) {
   element.querySelector('.strength-icon').classList.add('rotate');
   rotationInterval = setInterval(() => {
     element.querySelector('.strength-icon').style.transform += 'rotate(10deg)';
   }, 100);
 }

 function stopRotation(element) {
   clearInterval(rotationInterval);
   element.querySelector('.strength-icon').classList.remove('rotate');
   element.querySelector('.strength-icon').style.transform = 'rotate(0deg)';
 }


 const btnReadMore = document.getElementById("btn-read-more");
const modalOverlay = document.getElementById("modal-overlay");

btnReadMore.addEventListener("click", openModal);

function openModal() {
  modalOverlay.style.display = "block";
}

function closeModal() {
  modalOverlay.style.display = "none";
}

var modal = document.getElementById("myModal");
var button = document.getElementById("btnmenus");
var closeBtn = modal.querySelector(".close");

button.addEventListener("click", function() {
  modal.style.display = "block";
});

closeBtn.addEventListener("click", function() {
  modal.style.display = "none";
});

window.addEventListener("click", function(event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});

 // Smooth scrolling function
 function smoothScroll(target) {
  const element = document.querySelector(target);
  window.scrollTo({
    top: element.offsetTop,
    behavior: "smooth"
  });
}

// Attach click event to the "Menu" link
const menuLink = document.querySelector('a[href="#menu-section"]');
menuLink.addEventListener("click", function(event) {
  event.preventDefault();
  smoothScroll("#menu-section");
});

function smoothScroll(target) {
  const element = document.querySelector(target);
  window.scrollTo({
    top: element.offsetTop,
    behavior: "smooth"
  });
}

// Attach click event to the "About Us" link
const aboutLink = document.querySelector('a[href="#about-section"]');
aboutLink.addEventListener("click", function(event) {
  event.preventDefault();
  smoothScroll("#about-section");
});

var modal2 = document.getElementById("myModal2");
var button2 = document.querySelector(".gallerybtn");
var closeBtn = document.getElementById("closes");

button2.addEventListener("click", function() {
  modal2.style.display = "block";
  document.body.style.overflow = "hidden"; // Prevent scrolling when the modal is open
});

closeBtn.addEventListener("click", function() {
  modal2.style.display = "none";
  document.body.style.overflow = "auto"; // Restore scrolling when the modal is closed
});

window.addEventListener("click", function(event) {
  if (event.target === modal2) {
    modal2.style.display = "none";
    document.body.style.overflow = "auto"; // Restore scrolling when clicking outside the modal
  }
});

function scrollToGallery(event) {
  event.preventDefault(); // Prevent the default link behavior
  
  var gallerySection = document.getElementById("gallery-section");
  var yOffset = gallerySection.getBoundingClientRect().top + window.pageYOffset;
  
  window.scrollTo({
    top: yOffset,
    behavior: 'smooth' // Optional: Add smooth scrolling effect
  });
}
