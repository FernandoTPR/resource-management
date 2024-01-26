function loadData(name){
    if ( name == 'btn1'){
        document.getElementById("para").innerHTML="<center><strong>...About Us...</strong></br></br>The innovator in Sri Lanka's vehicle rental service. With 70% of the market share in the current business, Our service is currently Sri Lanka's top provider of rental car services. Consequently, through its so many differnte car fleet, which ranges widely in premium and semi-luxury cars, it offers an entire bouquet of end-to-end transportation solutions.In order to guarantee passenger comfort and safety down to the last detail, We have gone above and beyond. From implementing the most recent technology to establishing 24/7 customer support centers, fully functional  bookings, and introducing customized solutions for all customer segments, the company has concentrated on putting the consumer first.</center>";
    }
    else if ( name == 'btn2' ){
        document.getElementById("para").innerHTML="<strong>Our Vision</strong></br></br>To be the top-rated rental service provider in Colombo and its nearby suburbs, especially among corporate clients and cab users, by offering excellent, high-quality, and timely service, closely observing daily operations, promptly responding to client complaints, and upholding a strict standard of customer-centeredness.";
    }
    else if ( name == 'btn3' ){
        document.getElementById("para").innerHTML="<strong>Mission Statement</strong></br></br>Our loyal customers are our top priority, even though our well-maintained fleet of vehicles and highly qualified chauffeurs guarantee the comfort and safety of our rides. In order to realize its objective, We have established high standards and implemented stringent rules and guidelines to ensure that all of its employees are honest and disciplined. All of our drivers go through a rigorous screening procedure that includes all relevant background checks. Our success is largely down to our dedicated employees, so we lay the groundwork by regularly training everyone from our drivers to our contact center staff.We also take into account our valued customers' evolving needs and those of the market, offering them more flexible, up-to-date transportation options.";
    }
    else if ( name == 'btn4' ){
        document.getElementById("para").innerHTML="<strong>Managment Team</strong></br></br>The Core Management Team of company has taken on the burden of creating an organization that is currently the market leader in the cab/taxi service industry in Sri Lanka. The team is made up of highly creative, knowledgeable team members with impeccable integrity.Our team possesses complementary management abilities, in-depth knowledge of business and its potential, and a dedication to upholding the industry's leadership. The objective is challenging; we must traverse a lot of land, engage in a lot of combat, and do things that most people with our resources could only imagine.";
    }
    else{
        alert("Invalid!!");
    }
}