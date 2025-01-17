
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>

    <link
    
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="style3.css" />
    <title>About</title>
  </head>
  <body>
    <div class="container">
    <header class="header">
        <a href="#" class="Logo">El wanchariss</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="aboutus.php">About us</a>
            <a href="services.php">Services</a>
            <a href="drs.php">Doctors</a>
            <a href="contact.php">Contact us</a>
            <button   class="btnLogin-popup"><a href="signupin.php" class="btnLogin-popup">Sign up / in </a></button> 
            

        </nav> 
    </header>
     
      <header class="headerr">

        <div class="content">
          <h1>About Us</h1>
          <p>
          Embrace a life of boundless wellness and fulfillment with our exceptional range of medical specialties meticulously designed to meet your every need. From general surgery, pediatrics, to gynecology, our comprehensive array of services caters to individuals of all ages and backgrounds. Experience the pinnacle of care with cutting-edge medical interventions and luxurious holistic therapies seamlessly integrated to nurture your body, mind, and soul. Each treatment, whether it be rejuvenating aesthetic procedures, advanced medical interventions, or personalized wellness programs, is delivered with the utmost care and expertise to ensure your journey towards optimal health and vitality is nothing short of extraordinary.

          </p>
          <button class="btnLogin-popup"><a href="services.php">Get Services</a></button>
        </div>
        <div class="image">
          <span class="image__bg"></span>
          <img src="imgaboutus/pic.jfif " alt="header image" />
          
          <div class="image__content image__content__2">
            <ul>
              <li>
                <span><i class="ri-check-line"></i></span>
                Get 20% off on every 1st month
              </li>
              <li>
                <span><i class="ri-check-line"></i></span>
                Expert Doctors
              </li>
            </ul>
          </div>
        </div>
      </header>
    </div>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap");
    :root {
      --primary-color: #51afe9;
      --primary-color-dark: #51afe9;
      --text-dark: #111827;
      --text-light: #6b7280;
      --white: #ffffff;
    }
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
  font-family: 'Poppins', sans-serif;
  list-style: none;
  text-decoration: none;
}

body,
input,
textarea {
  font-family: "Poppins", sans-serif;
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    background-color:transparent;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 1000;
    

} 


.Logo {
    font-size: 32px;
    color: #333;
    text-decoration: none;
    font-weight: 700;
    pointer-events: none;
    filter: drop-shadow(0 0 5px white); 
} 

.navbar a {
    position: relative;
    font-size: 18px;
    color: #333;
    text-decoration: none;
    font-weight: 500;
    margin-right: 40px;
    text-transform: capitalize;
    transition:all .42s ;
} 


.navbar a::after{
    content: '';
    position: absolute;
    width:0;
    height: 2px;
    background:#51afe9;
    bottom: -2px;
    left: 0;
    transition: all .42s;
}

.navbar a:hover::after{
    width: 100%;
}
.navbar .btnLogin-popup {
    width: 150px;
    background-color:#51afe9;
    border: none;
    outline: none;
    height: 49px;
    border-radius: 49px;
    color: #333;
    text-transform: uppercase;
    font-weight: 600;
    margin: 10px 0;
    cursor: pointer;
    transition: 0.5s;
}
.navbar .btnLogin-popup:hover{
  background-color: transparent;
  color: #333;
}
 .btnLogin-popup {
    width: 150px;
    background-color:#51afe9;
    border: none;
    outline: none;
    height: 49px;
    border-radius: 49px;
    color: #333;
    text-transform: uppercase;
    font-weight: 600;
    margin: 10px 0;
    cursor: pointer;
    transition: 0.5s;
}
.btnLogin-popup a {
  color: #111827;
}
.btnLogin-popup:hover{
  background-color: transparent;
  color: #333;
}


    
    .container {
      max-width: 1200px;
      margin: auto;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    } 
    
   

    .headerr {
      padding: 0 1rem;
      flex: 1;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 2rem;
      align-items: center;
    }
    .content h1 {
      margin-bottom: 1rem;
      font-size: 3rem;
      font-weight: 700;
      color: var(--text-dark);
    }
    .content h1 span {
      font-weight: 400;
    }
    .content p {
      margin-bottom: 2rem;
      color: var(--text-light);
      line-height: 1.75rem;
    }
    .image {
      position: relative;
      text-align: center;
      isolation: isolate;
      background-color: white; /* Set background color to white */
    }
    .image img {
      width: 100%;
      max-width: 475px;
      transition: transform 0.3s ease;
    }
    .image img:hover {
      transform: scale(1.1);
    }
    .image__bg {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      height: 450px;
      width: 450px;
      background-color: var(--white);
      border-radius: 100%;
      z-index: -1;
    }
    .image__content {
      position: absolute;
      top: 50%;
      left: 50%;
      padding: 1rem 2rem;
      display: flex;
      align-items: center;
      gap: 1rem;
      text-align: left;
      background-color: var(--white);
      border-radius: 5px;
      box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
    }
    .image__content__1 {
      transform: translate(calc(-50% - 12rem), calc(-50% - 8rem));
    }
    .image__content__1 span {
      padding: 10px 12px;
      font-size: 1.5rem;
      color: var(--primary-color);
      background-color: #defcf4;
      border-radius: 100%;
    }
    .image__content__1 h4 {
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--text-dark);
    }
    .image__content__1 p {
      color: var(--text-light);
    }
    .image__content__2 {
      transform: translate(calc(-50% + 8rem), calc(-50% + 10rem));
    }
    .image__content__2 ul {
      list-style: none;
      display: grid;
      gap: 1rem;
    }
    .image__content__2 li {
      display: flex;
      align-items: flex-start;
      gap: 0.5rem;
      color: var(--text-light);
    }
    .image__content__2 span {
      font-size: 1.5rem;
      color: var(--primary-color);
    }
    @media (width < 900px) {
      .nav__links {
        display: none;
      }
      .headerr {
        padding: 1rem;
        grid-template-columns: repeat(1, 1fr);
      }
      .content {
        text-align: center;
      }
      .image {
        grid-area: 1/1/2/2;
      }
    }
  </style>
  </body>
</html>
