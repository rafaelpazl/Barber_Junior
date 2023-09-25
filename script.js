
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
