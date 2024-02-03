
    const button = document.querySelector("button")

	button.addEventListener("click", () => {
		Notification.requestPermission().then(perm => {
			if (perm === "granted") {
				const notification = new Notification("Example notification", {
					body: "This is more text",
					data: { hello: "world"},
					icon: "images/logoclean.png",
				})
			}
		})
	})

	const modal = document.querySelector('.modal-container')

function openModal() {
  modal.classList.add('active')
}
document.addEventListener('DOMContentLoaded', function() {
  setTimeout(function() {
    openModal();
  }, 3000);
});

function openModal() {
  var modal = document.querySelector('.modal-container');
  modal.classList.add('active');
}

function closeModal() {
  var modal = document.querySelector('.modal-container');
  modal.classList.remove('active');
}
