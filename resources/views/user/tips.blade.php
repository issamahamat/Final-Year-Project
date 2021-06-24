@extends("userlayout")

@section("content")
<style media="screen">

body {
  font-family: "IBM Plex Sans", sans-serif;
  background-color: rgba(0,0,0,.1);
}

h2 {
  margin: 20px auto 80px;
  font-size: 38px;
  font-weight: 300;
  text-align: center;
  letter-spacing: 2px;
  line-height: 1.5;
}

details {
  width: 75%;
  min-height: 5px;
  max-width: 700px;
  padding: 45px 70px 45px 45px;
  margin: 0 auto;
  position: relative;
  font-size: 22px;
  border: 1px solid rgba(0,0,0,.1);
  border-radius: 15px;
  box-sizing: border-box;
  transition: all .3s;
}

details + details {
  margin-top: 20px;
}

details[open] {
  min-height: 50px;
  background-color: #f6f7f8;
  box-shadow: 2px 2px 20px rgba(0,0,0,.2);
}

details p {
  color: #96999d;
  font-weight: 300;
}

summary {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: 500;
  cursor: pointer;
}

summary:focus {
  outline: none;

}

summary:focus::after {
  content: "";
  height: 100%;
  width: 100%;
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  box-shadow: 0 0 0 5px rgb(42, 175, 164);
}

summary::-webkit-details-marker {
  display: none
}

.control-icon {
  fill: rebeccapurple;
  transition: .3s ease;
  pointer-events: none;
}

.control-icon-close {
  display: none;
}

details[open] .control-icon-close {
  display: initial;
  transition: .3s ease;
}

details[open] .control-icon-expand {
  display: none;
}
#footer{

  background-image: linear-gradient(to left, #00918e, #c0ece7);
  padding: 20px 10px 8px;
}
.footer-image{
margin: 30px 0;
height: 100px;
}

.doit{
color: greenyellow;
}

.donot{
color: red;
}
</style>
<body>

<h2><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Tips For Interview and answer the questions below</h2>

<div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
  <svg xmlns="http://www.w3.org/2000/svg">
    <symbol viewBox="0 0 24 24" id="expand-more">
      <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/>
    </symbol>
    <symbol viewBox="0 0 24 24" id="close">
      <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/>
    </symbol>
  </svg>
</div>

<details>

    <summary>
      Tell me about yourself
      <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
      <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>This common interview question often trips-up interviewees because they say too much or not enough. <br><br>
      Hiring managers want to hear 30 seconds or less about your life. They don’t want to hear your entire, ten-minute, life story. <br><br>
      <span class="doit">REMEMBER:</span> <br><br>
      When it comes to “Tell me about yourself,” just present the highlight reel. <br><br>
      <span class="doit">DO:</span> Use this question as a time to personally connect with your interviewer. Do your research ahead of time on your interviewer.
      If you find out he/she went to your school, had the same major, was in your sorority/fraternity, or shares some other connection,
      this is the time to make that personal connection. That personal connection may very well make you more memorable and desirable
      than other candidates.  An example would be: <br><br>
      <i> "I grew up in a small town in upstate New York most people have never heard of, but I know you’ll recognize it because
       I saw it listed as your hometown on your employee bio! It’s a small world!"</i><br><br>
       <span  class="donot"> DO NOT:</span> Just focus on work specific information. This is the time to share some personal things, like hobbies, accomplishments, hometown, etc.
       In other words, this question is perfect for those with limited or no work experience. You want to show your interviewer you’re not a one-dimensional robot,
       but someone who is well-rounded and will add flavor to the team already in place.</p>
</details>


<details>
  <summary>
    What are your strengths?
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
  </summary>
  <p>Don’t look at this common interview question as a trick, but rather a gift.
      Many candidates stumble on this question, but you should see it as a showcase for who you truly are.
      It provides an excellent opportunity for you to demonstrate your personality, expertise, and preparation for the interview. <br><br>

      <span class="doit">DO:</span> Keep it short. Choose two or three strengths that best reflect you. Support one of your strengths with a short, yet detailed, example, such as:
      I believe one of my greatest strengths is time management. For example, last semester I managed to earn a 3.8 while working 20 hours a week,
      serving as president of my fraternity and also acting as a teaching assistant for a freshman writing course. <br><br>

      <span  class="donot"> DO NOT:</span> Overwhelm the interviewer with too many adjectives and not enough substance.  The interviewer is looking for quality over quantity here.</p>
</details>


<details>
  <summary>
    Why do you want to work here?
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
  </summary>
  <p>Only your imagination my friend. Go forth!</p>
</details>

<details>
    <summary>
     Where do you see yourself in five years?
      <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
      <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>Only your imagination my friend. Go forth!</p>
  </details>

  <details>
    <summary>
      Why should we hire you?
      <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
      <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>Only your imagination my friend. Go forth!</p>
  </details>

  <details>
    <summary>
    What are you looking for in this position?
      <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
      <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>Only your imagination my friend. Go forth!</p>
  </details>

  <details>
    <summary>
     How do you deal with pressure or stressful situations?
      <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
      <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>Only your imagination my friend. Go forth!</p>
  </details>

  <details>
    <summary>
        Do you have prior experience?
      <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
      <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>Only your imagination my friend. Go forth!</p>
  </details><br><br><br>
  </body>

  <script type="text/javascript">

  const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));

  </script>
@endsection
