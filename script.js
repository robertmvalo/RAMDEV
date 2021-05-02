const nav = document.querySelector('.navbar');








// let mapInput = input.map( el => 
    
//      console.log(`My name is ${el} my email ${el.email} and my tel: ${el.tele}`))

   






nav.onscroll= function() {
    if (!pageYOffset > 100) {
        console.log('changed')
      nav.classList.add('.top') ; 
    } else {
        console.log('wrong code')
        nav.classList.remove('.top');
    }
    
}

// console.log('connected')