"use strict";

window.addEventListener("load", function (){
    let message = document.getElementById("message")

    function showLink(link, simple){
        let linksList = document.getElementById("links-list")

        let linkElement = document.createElement("div")
        linkElement.classList.add("link")
        linkElement.innerHTML = `<p><a href="${link}">${link}</a> => <a href="${simple}">${simple}</a></p>`
        linksList.appendChild(linkElement)
    }

    function sendLink(link, protocol){
        const xhr = new XMLHttpRequest()

        xhr.addEventListener( "load", function(event){
           console.log(event.target.status)
            if(event.target.status === 201){
                let data = JSON.parse(xhr.responseText);
                showLink(data.data.protocol + "://" + data.data.url, data.data.simple_url)
            }
            else{
                message.innerText = "Упс! Что-то пошло не так"
            }
        } );
        xhr.open("POST", "/api/link", true)
        xhr.setRequestHeader('Accept', 'application/json')
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        const params = `url=${link}&protocol=${protocol}`
        xhr.send(params)
    }

    const form = document.getElementById("link-shortening-form")
    let link = form.elements.link
    let protocol = form.elements.protocol

    link.addEventListener('input', (event) => {
        if(link.value.indexOf("https://") > -1){
            link.value = link.value.split("https://")[1]
            protocol.value = "https"
        }
        if(link.value.indexOf("http://") > -1){
            link.value = link.value.split("http://")[1]
            protocol.value = "http"
        }
    })

    form.addEventListener("submit", function ( event ){
        event.preventDefault()
        sendLink(link.value, protocol.value)
    });
});
