let body = document.querySelector("body");

let currmode = document.querySelector("#theme-toggle");

let changemode = "light"

currmode.addEventListener("click", () => {
  if (changemode === "light") {
  changemode = "dark"  
  body.classList.add("dark")
  body.classList.remove("light")
  } else {
    changemode = "light"
    body.classList.add("light")
  body.classList.remove("dark")

  }
  console.log(changemode)
})