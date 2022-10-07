<x-layouts.app>
    <div class="about-container">

        <div class="about-section">
            <div  class="cobraKimonosLogoHolder">
                <img src="{{asset('/assets/images/Cobra-logo.png')}}" height="80px" width="150px" alt='cobra logo' />   
            </div>
            
            <p>We Deliver Quality</p>
            <p>COBRA. was established in 2009 with the goal of addressing the need for high quality Jiu Jitsu products at affordable prices.
        
                Founded by Gareth Dummer and Lee Jones in the heart of South Wales, Tatami now has a diverse and driven team committed to expanding the sport worldwide. Gareth, himself a Brazilian Jiu Jitsu black belt, had spent years teaching the sport in lower income areas and local communities and found it increasingly difficult to find high quality products that his students could afford.
                
                That is where Tatami Fightwear came into the equation. From day one, we've worked tirelessly to develop innovative products and support the growth of the sport and make it accessible to a wider-ranging audience.
                
                Our aim is to expose combat sports to more people worldwide and uphold the values of BJJ, and this drives our work with associations such as the Royal Marines REORG foundation that ties into our mission statement to make the sport accessible to all. 
                
                After 13 years of continuous development and innovation, our range now includes performance and lifestyle gear, from Gi's to rash guards to leisurewear and everything in between, to showcase people on their Jiu Jitsu journey. 
                
                As well as having a loyal and growing customer base, we are proud to support some of the world's best Jiu Jitsu athletes and pioneers, such as JT Torres, Josh Hinger and Michelle Nicolini, and also sponsor some of the next generation of up-and-coming stars that buy into the Tatami Fightwear mantra.
            </p>
        </div>
        
        <br/>
        <div class="about-section">
            <img src="{{asset('/assets/images/IJJC.png')}}" height="150px" width="150px" alt='cobra logo' />
            <h1>IJJC Academy</h1>
            <p>We are the International Jiu-Jitsu Center, conveniently 
                located in New Cairo. Our Jiu-Jitsu Center is an 
                excellent choice for self-defence, discipline, and fitness 
                for all ages. Jiu-Jitsu is a Martial Arts program that 
                focuses on Character Education, Martial Arts 
                Education, and Physical Education. We offer classes in 
                a fun, safe, and supervised environment where our 
                children can learn essential life skills, including 
                discipline, respect, focus, self-control, teamwork, 
                leadership, and gratitude, all while improving their 
                physical health.
            </p>
            <p>
                Jiu-Jitsu is a powerful character-builder and one of the 
                most practical and complete forms of self-defence. We are 
                reaching out our services to clubs and schools in our 
                community because we genuinely care about making a 
                difference in peoples lives.
            </p>
            <p>
                Our academy is affiliated under Professor Fouzi 
                Mezouari, a 3rd-degree black belt holder from Delariva 
                Paris and a two-time world vice-champion UAEJJ, a four-time French champion, a multiple international open 
                medalist, and a pro league champion CFJJB.
            </p>
            <a href="/ijjc" >Read more...</a>
        </div>
        
        <br/>
        <h2 >Founders</h2>
        <div class="team-container">
            <div class="card">
                <img class="img"    src="{{asset('/assets/images/AhmedBahgat.jpg')}}"  alt="Ahmed Bahgat" />
            <div >
                <h4><b>Ahmed Bahgat</b></h4>
                <p>CEO Founder of COBRA.Kimonos and IJJC academy</p>
            </div>
            </div>
        
            {{-- <div class="card">
                <img class="img"   src="{{asset('/assets/images/AhmedBahgat.jpg')}}"  alt="Ahmed Bahgat" />
              <div >
                <h4><b>Ahmed Bahgat</b></h4>
                <p>CEO Founder of COBRA.Kimonos and IJJC academy</p>
              </div>
            </div> --}}
        </div>
        
        
        <br/>
        <br/>
        
        <h2 >Contact Us</h2>
        <div class="contact-container" >
            <div class="contact-content" >
                <div class="left-side">
                    <div class="details">
                        <i class="fa fa-map-marker"></i>
                        <div class="topic">Address</div>
                        <div class="text-one">Yasmin 4, Ja'far ibn Abi Talib - New Cairo 1</div>
                    </div>
                    <div class="details">
                        <i class="fa fa-phone"></i>  &nbsp;
                        <a href="https://wa.me/201114491444"><i class="fa fa-whatsapp"></i></a>
                        <div class="topic">Phone</div>
                        <div class="text-one">
                            <a href="tel:201114491444">+201114491444</a>
                        </div>
                    </div>
                    <div class="details">
                        <i class="fa fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">ahmed@gmail.com</div>
                    </div>
              </div>
        
        
              <div class="right-side">
                    <div class="topic-text">Send a message</div>
                    <p>If you have any question or any types of quries related to your order, you can send me message here. It's our pleasure to help you.</p>
                    <form action="#">
                        <div class="input-box">
                            <input type="text" placeholder="Enter your name"/>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Enter your email"/>
                        </div>
                        <div class="input-box message-box">
                            <textarea placeholder='Your message...'></textarea>
                        </div>
                        <div class="button">
                            <input type="button" value="Send Now"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>