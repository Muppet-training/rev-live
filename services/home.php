<!DOCTYPE html>
<html lang="en"> 

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Recipe Revenue</title>
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="public/style.css" type="text/css">
  <script src="js/scripts.js"></script>
</head>

<body id="content" class="home">
  <section class="overlay">
    <section class="nav">
      <ul>
        <li id="toggle" onClick={toggle()} ><div>x</div></li>
        <li><h2>Recipe Revenue</h2></li>
        <li>
          <a href="#services">Services</a>
          <a href="#recipe-calculator">Calculator</a>
          <a href="#articles">Articles</a>
          <a href="#work-with-us">Contact</a>
        </li>
      </ul>
    </section>
    <section class="footer">
      <h4>Services We Offer</h4>
      <div class="footer-menu">
        <div class="f1">
          <div class="contact_box">
            <h3>Recipe Calculator</h3>
            <ul>
              <li>Sign Up</li>    
              <li>Login</li>    
              <li>FAQ</li>    
              <li>Pricing</li>    
              <li>Contact</li>       
            </ul>
          </div>
        </div>
        <div class="f2">
          <div class="contact_box">
            <h3>Services</h3>
            <ul>
              <li>Marketing</li>    
              <li>Web Development</li>    
              <li>Touch Point Design</li>    
              <li>Digital Design</li>    
              <li>Consulting</li>      
            </ul>
          </div>
        </div>
        <div class="f3">
          <div class="contact_box">
            <h3>Resources</h3>
            <ul>
              <li>Recipe Calculator</li>    
              <li>Cashflow Projection</li>    
              <li>Marketing PDF</li>    
              <li>Recipe Templates</li>    
              <li>Articles</li>       
            </ul>
          </div>
        </div>
        <div class="f4">
          <div class="contact_box">
            <h3>Contact Us</h3>
            <ul>
              <li>Tom @ RecipeRevenue.com</li>    
              <li>0428 438 348</li>    
              <li class="social"> 
                <a href="http://instagram.com/reciperevenue" target="blank">
                  <div class="icon">
                    <svg class="svg_icon">
                      <use xlink:href="images/icons.svg#instagram" />
                    </svg>
                  </div>
                </a>
                <a href="http://facebook.com/reciperevenue" target="blank">
                  <div class="icon">
                    <svg class="svg_icon">
                      <use xlink:href="images/icons.svg#facebook" />
                    </svg>
                  </div>
                </a>
                <a href="http://youtube.com/reciperevenue" target="blank">
                  <div class="icon">
                    <svg class="svg_icon">
                      <use xlink:href="images/icons.svg#youtube" />
                    </svg>
                  </div>
                </a>
                <a href="http://medium.com/reciperevenue" target="blank">
                  <div class="icon">
                    <svg class="svg_icon">
                      <use xlink:href="images/icons.svg#medium" />
                    </svg>
                  </div>
                </a>
              </li>  
            </ul>
          </div>
        </div>
      </div>
    </section>
  </section>
  <div class="header_image">
    <section class="nav">
        <ul>
          <li id="toggle" onClick={toggle()} >
            <a href="#content">
              <div class="icon">
                <svg class="svg_icon">
                  <use xlink:href="images/icons.svg#menu" />
                </svg>
              </div>
            </a>
          </li>
          <li><h2>Recipe Revenue</h2></li>
          <li>
            <a href="#services">Services</a>
            <a href="#recipe-calculator">Calculator</a>
            <a href="#articles">Articles</a>
            <a href="#work-with-us">Contact</a>
          </li>
        </ul>
    </section>
    <section class="header">
        <h1>Optimising Hospitality Revenue Streams</h1>
    </section>
  </div>
  <section  class="callout callout_1">
    <div class="wrapper_1">
      <div id="recipe-calculator" class="calc">
        <div class="display" id="displayT">$16,752</div>
        <div class="name" id="infoT">Profit Per Year</div>
        <div class="calc_buttons">
          <div class="icon ct" id="chefT" >
            <svg class="svg_icon">
              <use xlink:href="images/icons.svg#cook-hat" />
            </svg>
          </div>
          <div class="icon ct" id="locationT">
            <svg class="svg_icon">
              <use xlink:href="images/icons.svg#bar" />
            </svg>
          </div>
          <div class="icon ct" id="foodT">
            <svg class="svg_icon">
              <use xlink:href="images/icons.svg#diet" />
            </svg>
          </div>
          <div class="icon ct" id="compareT">
            <svg class="svg_icon">
              <use xlink:href="images/icons.svg#report" />
            </svg>
          </div>
          <div class="icon ct"  id="supplyT">
            <svg class="svg_icon">
              <use xlink:href="images/icons.svg#delivery-truck" />
            </svg>
          </div>
          <div class="icon ct"  id="profitT">
            <svg class="svg_icon">
              <use xlink:href="images/icons.svg#profit" />
            </svg>
          </div>
        </div>
        <div class="equals ct" id="equalsT">
          <p class="top_calc">=</p>
        </div>
      </div>
      <div class="title_1">
        <h3>Recipe Profit<br/>Calculator</h3>
      </div>
    </div>
  </section >

  <section class="list">
    <div>
      <h2>There are four ways to make profit</h2>
      <ul>
        <li>
          <span class="ol">1</span>
          <span class="list_text">Optimise Production Process</span>
        </li>
        <li>
          <span class="ol">2</span>
          <span class="list_text">Increase customer spend</span>
        </li>
        <li>
          <span class="ol">3</span>
          <span class="list_text">Increase customer frequency</span>
        </li>
        <li>
          <span class="ol">4</span>
          <span class="list_text">Increase customer awareness</span>
        </li>
      </ul>
    </div>
  </section>

  <section class="contact">
    <div class="wrapper">
      <div>
        <h3>Recipe Revenue</h3>
        <p>Only contact us if you want to optimse your revenue streams</p>
      </div>
      <div>
        <a href="#work-with-us">Let's Talk Profit</a>
      </div>
    </div>
  </section>

  <section id="services" class="sales_funnel">
    <div class="funnel">
      <div class="funnel_text">
        <h3>Sales Funnel Strategy</h3>
        <p>We optimise your revenue streams by focusing on your customers experience at each stage of their sales journey</p>
      </div>
      <div class="funnel_block">
        <div class="funnel_flow">
          <div class="left">
            <div class="line"></div> 
          </div>
          <ul class="funnel_list">
            <li class="f1">Awareness</li>
            <li class="f2">Engagement</li>
            <li class="f3">Conversion</li>
            <li class="f4">Onsell</li>
          </ul>
          <div class="right">
            <div class="line"></div> 
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="topic marketing">
    <div class="funnel">
      <div class="funnel_text">
        <h3>Marketing</h3>
        <p>Your customers attention is valuable, connect with your customers  optimally to maximise your return on investment (ROI)</p>
        <ul class="text">
          <li>Sync contact information</li>
          <li>Refine customer demogrphics</li>
          <li>Develop key brand messages</li>
          <li>Produce media to connect with customers</li>
        </ul>
      </div>
      <div class="funnel_icon">
        <div class="left"></div>
        <ul class="rows">
          <li class="top"><div class="line"></div></li>
          <li class="middle">
            <div class="f1 icon">
              <svg class="svg_icon">
                <use xlink:href="images/icons.svg#sprout" />
              </svg>
            </div>
          </li>
          <li class="bottom"><div class="line"></div></li>
        </ul>
        <div class="right"></div>
      </div>
    </div>
  </section>

  <section class="topic dev">
    <div class="funnel">
      <div class="funnel_text">
        <h3>Web Dev</h3>
        <p>When a customer visits your website you have 100% of their attention! It's your time to shine by seemlessly communicating why your brand is remarkable!</p>
        <ul class="text">
          <li>Complete website development</li>
          <li>Search engine optimisation</li>
          <li>Customer database management for retargeting</li>
          <li>Measure ROI by developing lead pages to track marketing campaigns </li>
        </ul>
      </div>
      <div class="funnel_icon">
        <div class="left"></div>
        <ul class="rows">
          <li class="top"><div class="line"></div></li>
          <li class="middle">
            <div class="f1 icon">
              <svg class="svg_icon">
                <use xlink:href="images/icons.svg#monitor" />
              </svg>
            </div>
          </li>
          <li class="bottom"><div class="line"></div></li>
        </ul>
        <div class="right"></div>
      </div>
    </div>
  </section>

  <section class="topic touch">
    <div class="funnel">
      <div class="funnel_text">
        <h3>Touch Point Design</h3>
        <p>We use touch point design optimse your sales funnel strategy, by focusing on each interaction your customer has with your brand</p>
        <ul class="text">
          <li>Analyse your customers entire sales experience</li>
          <li>Prioritise touch points by sales conversion</li>
          <li>Improve your customer service experience</li>
          <li>Reduce speed to purchase by helping the customer decide what to eat faster</li>
        </ul>
      </div>
      <div class="funnel_icon">
        <div class="left"></div>
        <ul class="rows">
          <li class="top"><div class="line"></div></li>
          <li class="middle">
            <div class="f1 icon">
              <svg class="svg_icon">
                <use xlink:href="images/icons.svg#volume-control" />
              </svg>
            </div>
          </li>
          <li class="bottom"><div class="line"></div></li>
        </ul>
        <div class="right"></div>
      </div>
    </div>
  </section>

  <section class="list inform">
    <div>
      <h3>An repeat customer is an informed customer</h3>
    </div>
  </section>

  <section id="articles" class="callout callout_2">
    <div class="wrapper">
      <h3>Shared knowledge</h3>
    </div>
  </section>

  <section class="knowledge">
    <ul class="cards">
    <li style="background-image: url(../images/carrots.png);">
        <div class="wrapper">
          <h4>
            Who is responsible for menu pricing?
          </h4>
        </div>
      </li>
      <li style="background-image: url(../images/quality.jpg);">
        <div class="wrapper">
          <h4>
            What is touch point design?
          </h4>
        </div>
      </li>
      <li style="background-image: url(../images/ste.jpg);">
        <div class="wrapper">
          <h4>
            7 keys to a successful service structure
          </h4>
        </div>
      </li>
      <li style="background-image: url(../images/steps.jpg);">
        <div class="wrapper">
          <h4>
            Count your steps to optimise service costs
          </h4>
        </div>
      </li>
      <li style="background-image: url(../images/supply.jpg);">
        <div class="wrapper">
          <h4>
            Why Suppliers are so important in our industry
          </h4>
        </div>
      
      </li>
      <li style="background-image: url(../images/carrots.png);">
        <div class="wrapper">
          <h4>
            Have empathy before judgement!
          </h4>
        </div>
      </li>
      <li style="background-image: url(../images/takeaway.jpg);">
        <div class="wrapper">
          <h4>
            Packaging or Dine in? Which is more profitable?
          </h4>
        </div>
      </li>
      <li style="background-image: url(../images/burrito.jpg);">
        <div class="wrapper">
          <h4>
            Do share menus really increase sales?
          </h4>
        </div>
      </li>
    </ul>
  </section>
  <section class="inform">
    <div>
      <h3>Keep Scrolling..</h3>
      <p>Clearly you are interested in maximising the opportunity infront of you. The quickest way to achieve this is by optimising your production process</p>
    </div>
  </section>

  <section class="callout callout_1 callout_3">
    <div class="wrapper_1">
      <div class="calc">
        <div class="display" id="display">$16,752</div>
        <div class="name" id="info">Profit Per Year</div>
        <div class="calc_buttons">
          <div class="icon cb" id="chef" >
            <svg class="svg_icon">
              <use xlink:href="images/icons.svg#cook-hat" />
            </svg>
          </div>
          <div class="icon cb" id="location">
            <svg class="svg_icon">
              <use xlink:href="images/icons.svg#bar" />
            </svg>
          </div>
          <div class="icon cb" id="food">
            <svg class="svg_icon">
              <use xlink:href="images/icons.svg#diet" />
            </svg>
          </div>
          <div class="icon cb" id="compare">
            <svg class="svg_icon">
              <use xlink:href="images/icons.svg#report" />
            </svg>
          </div>
          <div class="icon cb"  id="supply">
            <svg class="svg_icon">
              <use xlink:href="images/icons.svg#delivery-truck" />
            </svg>
          </div>
          <div class="icon cb"  id="profit">
            <svg class="svg_icon">
              <use xlink:href="images/icons.svg#profit" />
            </svg>
          </div>
        </div>
        <div class="equals">
          <p>Start Today!</p>
        </div>
      </div>
      <div class="title_1">
        <h3>Optimise Your Production Process</h3>
      </div>
    </div>
  </section >



  <div class="work_form" id="work-with-us">
    <h3>Work With Us</h3>
    <form action="../includes/contactForm.php" method="POST">
      <div class="form_interest">
        <Label>What service are you interested in?</Label>
        <div class="radio_options">
          <input type="radio" name="interest" value="calc" class="radio"><span>Recipe Calculator</span><br>
          <input type="radio" name="interest" value="market" class="radio" ><span>Marketing & Advertising</span><br>
          <input type="radio" name="interest" value="dev" class="radio"><span>Web Development</span><br>
          <input type="radio" name="interest" value="design" class="radio"><span>Touch Point Design</span><br>
          <input type="radio" name="interest" value="full" class="radio"><span>Full service</span><br>
          <input type="radio" name="interest" value="none" class="radio"><span>None I just want to chat</span>
        </div>
      </div>
      <div class="form_name">
        <Label>Your Name<span>*</span></Label>
        <input id="name" name="name" type="text" onBlur="checkInput(this)" required/> 
      </div>
      <div class="form_company">
        <Label>Company Name<span>*</span></Label>
        <input id="company" name="company" type="text" onBlur="checkInput(this)" required/>
      </div>
      <div class="form_email">
        <Label>Contact email<span>*</span></Label>
        <input id="email" name="email" type="text" onBlur="checkInput(this)" required/> 
      </div>
      <div class="form_phone">
        <Label>Contact Phone Number<span>*</span></Label>
        <input id="phone" name="phone" type="number" onBlur="checkInput(this)" required/>
      </div>
      <div class="form_desire">
        <Label>What business problem are you currently facing that keeps you up at night?<span>*</span></Label>
        <textarea id="desire" rows="8" name="desire" onBlur="checkInput(this)"required></textarea>
      </div>
      <div class="form_objective">
        <Label>What short & long term objectives, are you using to measure your success?<span>*</span></Label>
        <textarea id="objective" rows="8" name="objective" onBlur="checkInput(this)" required></textarea>
      </div>
      <div class="form_url">
        <Label>What URL provides us with the best context to understand the problem you are trying to solve?</Label>
        <input id="url" name="url" type="text" onBlur="checkInput(this)"/>
      </div>
      <div class="form_optin">
        <Label>Consistent value builds trust.</Label>
        <div class="checkbox_options">
          <div class="checkbox">
            <input type="checkbox" name="optin" class="radio" >
          </div>
          <div class="optin">
            <span>Yes, I would like to recieve information that you believe would be of value to me. I expect that this information includes Articles, Videos & Services to help us grow our business</span>
          </div>
        </div>
      </div>
      <div class="form_button">
        <button type="submit" name="submit" >Send Enquiry</button>
      </div>
    </form>
  </div>
  <footer class="footer">
    <h4>Thank you for taking the time to look over our services</h4>
    <div class="footer-menu">
      <div class="f1">
        <div class="contact_box">
          <h3>Recipe Calculator</h3>
          <ul>
            <li>Sign Up</li>    
            <li>Login</li>    
            <li>FAQ</li>    
            <li>Pricing</li>    
            <li>Contact</li>       
          </ul>
        </div>
      </div>
      <div class="f2">
        <div class="contact_box">
          <h3>Services</h3>
          <ul>
            <li>Marketing</li>    
            <li>Web Development</li>    
            <li>Touch Point Design</li>    
            <li>Digital Design</li>    
            <li>Consulting</li>      
          </ul>
        </div>
      </div>
      <div class="f3">
        <div class="contact_box">
          <h3>Resources</h3>
          <ul>
            <li>Recipe Calculator</li>    
            <li>Cashflow Projection</li>    
            <li>Marketing PDF</li>    
            <li>Recipe Templates</li>    
            <li>Articles</li>       
          </ul>
        </div>
      </div>
      <div class="f4">
        <div class="contact_box">
          <h3>Contact Us</h3>
          <ul>
            <li>Tom @ RecipeRevenue.com</li>    
            <li>0428 438 348</li>    
            <li class="social"> 
              <a href="http://instagram.com/reciperevenue" target="blank">
                <div class="icon">
                  <svg class="svg_icon">
                    <use xlink:href="images/icons.svg#instagram" />
                  </svg>
                </div>
              </a>
              <a href="http://facebook.com/reciperevenue" target="blank">
                <div class="icon">
                  <svg class="svg_icon">
                    <use xlink:href="images/icons.svg#facebook" />
                  </svg>
                </div>
              </a>
              <a href="http://youtube.com/reciperevenue" target="blank">
                <div class="icon">
                  <svg class="svg_icon">
                    <use xlink:href="images/icons.svg#youtube" />
                  </svg>
                </div>
              </a>
              <a href="http://medium.com/reciperevenue" target="blank">
                <div class="icon">
                  <svg class="svg_icon">
                    <use xlink:href="images/icons.svg#medium" />
                  </svg>
                </div>
              </a>
            </li>   
          </ul>
        </div>
      </div>
    </div>
    <p>Built By Tom From Xenus 2018</p>
  </footer>

</body>
</html>