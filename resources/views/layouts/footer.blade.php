<script>


    function deletePost(postId) {
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          fetch(`https://social-backend-gamma-eight.vercel.app/api/posts/${postId}`, {
            method: 'DELETE',
            headers: {
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
          })
            .then(response => response.json())
            .then(data => {
              if (data.success) {
                Swal.fire('Deleted!', 'Post has been deleted.', 'success');
                location.reload();
              }
            });
        }
      });
    }
    async function handleMultipleFileUpload(input, type) {
      if (input.files && input.files.length > 0) {
        $('#uploadStatusModal').modal('show');
        const uploadedUrls = [];

        for (let file of input.files) {
          const formData = new FormData();
          formData.append('file', file);
          formData.append('type', type);
          formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

          try {
            const response = await fetch('/upload-file', {
              method: 'POST',
              body: formData,
              headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
              }
            });

            const data = await response.json();
            if (data.url) {
              uploadedUrls.push(data.url);
            }
          } catch (error) {
            console.error('Upload failed:', error);
            showToast('error', 'File upload failed. Please try again.');
          }
        }

      console.log(uploadedUrls);

        document.querySelector('#imageUrlInput').value = JSON.stringify(uploadedUrls);
        input.title = `${input.files.length} files selected`;
        showToast('success', 'Files uploaded successfully!');
        $('#uploadStatusModal').modal('hide');
      }
    }


    function handleFileUpload(input, type) {
      if (input.files && input.files[0]) {
        $('#uploadStatusModal').modal('show');

        const formData = new FormData();
        formData.append('file', input.files[0]);
        formData.append('type', type);
        formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

        fetch('/upload-file', {
          method: 'POST',
          body: formData,
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
          }
        })
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.json();
          })
          .then(data => {
            if (data.url) {
              document.querySelector(`input[name="${type}Url"]`).value = data.url;
              input.title = input.files[0].name;
              showToast('success', 'File uploaded successfully!');
            }
          })
          .catch(error => {
            console.error('Upload failed:', error);
            // alert('File upload failed. Please try again.');
            showToast('error', 'File upload failed. Please try again.');
          })
          .finally(() => {
            $('#uploadStatusModal').modal('hide');
          });
      }
    }




    // Add this script after your existing scripts
    document.querySelector('input[name="postAudio"]').addEventListener('change', function () {
      if (this.files.length > 0) {
        this.title = this.files[0].name;
      } else {
        this.title = 'No audio file chosen';
      }
    });

    document.querySelector('input[name="postImage"]').addEventListener('change', function () {
      if (this.files.length > 0) {
        this.title = this.files[0].name;
      } else {
        this.title = 'No image file chosen';
      }
    });

    document.querySelector('input[name="postVideo"]').addEventListener('change', function () {
      if (this.files.length > 0) {
        this.title = this.files[0].name;
      } else {
        this.title = 'No video file chosen';
      }
    });



    function showFullText(postId, fullText) {
      $('.post-text-' + postId).html(fullText + ' <a href="javascript:void(0)" onclick="showLessText(\'' + postId + '\', \'' + addslashes(fullText) + '\')" class="read-less-btn">Read Less</a>');
    }

    function showLessText(postId, fullText) {
      $('.post-text-' + postId).html(fullText.substr(0, 250) + '... <a href="javascript:void(0)" onclick="showFullText(\'' + postId + '\', \'' + addslashes(fullText) + '\')" class="read-more-btn">Read More</a>');
    }

    function addslashes(string) {
      return string.replace(/\'/g, '\\\'').replace(/\"/g, '\\"');
    }




    document.addEventListener('DOMContentLoaded', function () {
      const likeButtons = document.querySelectorAll('.likes.heart');
      likeButtons.forEach(button => {
        button.addEventListener('click', function () {
          const postId = this.getAttribute('data-post-id');
          const user = JSON.parse(localStorage.getItem('user'));
          if (user && user._id) {
            likePost(postId, user._id, this);
          } else {
            alert('Please log in to like posts');
          }
        });
      });

      function likePost(postId, userId, likeButton) {
        fetch(`https://social-backend-gamma-eight.vercel.app/api/posts/${postId}/like`, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            userId: userId
          })
        })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              const likeCountElement = likeButton.querySelector('.like-count');
              likeCountElement.textContent = data.data.likeCount;
            }
          })
          .catch(error => console.error('Error:', error));
      }
    });
  </script>




  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const commentForms = document.querySelectorAll('.comment-form');
      commentForms.forEach(form => {
        form.addEventListener('submit', function (e) {
          e.preventDefault();
          const postId = this.getAttribute('data-post-id');
          const commentText = this.querySelector('textarea').value;
          const user = JSON.parse(localStorage.getItem('user'));
          if (user && user._id) {
            submitComment(postId, user._id, commentText, this);
          } else {
            alert('Please log in to comment');
          }
        });
      });

      function submitComment(postId, userId, commentText, form) {
        fetch(`https://social-backend-gamma-eight.vercel.app/api/posts/${postId}/comment`, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            userId: userId,
            text: commentText
          })
        })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              // Refresh the comments or add the new comment to the list
              location.reload(); // For simplicity, we're reloading the page
            }
          })
          .catch(error => console.error('Error:', error));
      }
    });
  </script>



  <script>
    const calendarDays = document.getElementById("calendar-days");
    const monthYearDisplay = document.getElementById("calendar-month-year");
    const prevMonthButton = document.getElementById("prev-month");
    const nextMonthButton = document.getElementById("next-month");

    let currentDate = new Date(); // Get the current date

    function renderCalendar(date) {
      const year = date.getFullYear();
      const month = date.getMonth();

      // Set the displayed month and year
      monthYearDisplay.textContent =
        date.toLocaleString("default", { month: "long" }) + " " + year;

      // Clear the previous days
      calendarDays.innerHTML = "";

      // Get the first day of the month
      const firstDay = new Date(year, month, 1);
      const lastDay = new Date(year, month + 1, 0);
      const daysInMonth = lastDay.getDate();
      const startDay = firstDay.getDay(); // Day of the week the month starts on

      // Create empty cells for the days before the first day of the month
      for (let i = 0; i < startDay; i++) {
        calendarDays.innerHTML += '<div class="day empty"></div>';
      }

      // Create the day cells for each day in the month
      for (let day = 1; day <= daysInMonth; day++) {
        const dayElement = document.createElement("div");
        dayElement.classList.add("day");
        dayElement.textContent = day;

        // Get the current date again for comparison
        const today = new Date();

        // Mark the current day
        if (
          day === today.getDate() &&
          month === today.getMonth() &&
          year === today.getFullYear()
        ) {
          dayElement.classList.add("today");
        }

        calendarDays.appendChild(dayElement);
      }
    }

    // Navigate to the previous month
    prevMonthButton.addEventListener("click", () => {
      currentDate.setMonth(currentDate.getMonth() - 1);
      renderCalendar(currentDate);
    });

    // Navigate to the next month
    nextMonthButton.addEventListener("click", () => {
      currentDate.setMonth(currentDate.getMonth() + 1);
      renderCalendar(currentDate);
    });

    // Initial render of the calendar
    renderCalendar(currentDate);
  </script>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var userData = document.querySelector('meta[name="user-data"]').getAttribute('content');
      if (userData) {
        localStorage.setItem('userData', atob(userData));
      }
    });
  </script>

  <script>
    @if(session('swal'))
      Swal.fire({
      icon: "{{ session('swal.icon') }}",
      title: "{{ session('swal.title') }}",
      text: "{{ session('swal.text') }}",
      showConfirmButton: true,
      allowOutsideClick: false,
      allowEscapeKey: false,
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
      });
    @endif

  </script>



  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <script src="js/poll.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/jquery-stories.js"></script>
  <script src="js/toast-notificatons.js"></script>
  <script src="js/TweenMax.min.js"></script>
  <!-- For timeline slide show -->
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3vI4IQqzxRU1449lbIHThUb2gCeDW47w&callback=initMap"></script>
  <!-- for location picker map -->
  <script src="js/locationpicker.jquery.js"></script>
  <!-- for loaction picker map -->
  <script src="js/map-init.js"></script>
  <!-- map initilasition -->
  <script src="js/page-tourintro.js"></script>
  <script src="js/page-tour-init.js"></script>
  <script src="js/stories-zuck.js"></script>
  <script src="js/stories-zuck-necessery.js"></script>
  <script src="js/stories-zuck-init.js"></script>
  <script src="js/script.js"></script>
  <script src="js/mobile.nav.js"></script>
  {{-- <script src="js/img-upload.js"></script> --}}


  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- Include toast component -->
  <x-toast />


  </body>

  </html>




