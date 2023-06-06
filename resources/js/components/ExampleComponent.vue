<template>
    <div>
      <!-- Banner -->
      <section class="banner">
        <img src="/images/Chatbot 2.png" alt="Banner Image">
        <h1>Software Company Website</h1>
      </section>

  <section id="community-section" class="background-section_light">
    <div class="container chatbot_community">
      <h3 class="community_h1">Our Services</h3>
      <div class="community-row">
        <div class="background-purple community-items_colored"></div>
        <div class="community-items_texts">
          <div>
            <h4 class="text-blue">Web Development.</h4>
            <h4 class="text-grey">Lorem Ipsum information for this area here.<br>Sample text only.</h4>
          </div>
        </div>
      </div>
      <div class="community-row row-reverse_on-small">
        <div class="community-items_texts">
          <div>
            <h4 class="text-blue">Mobile Development.</h4>
            <h4 class="text-grey">Lorem Ipsum information for this area here.<br>Sample text only.</h4>
          </div>
        </div>
        <div class="background-ligh-blue community-items_colored"></div>
      </div>
      <div class="community-row">
        <div class="background-purple community-items_colored"></div>
        <div class="community-items_texts">
          <div>
            <h4 class="text-blue">Project Management.</h4>
            <h4 class="text-grey">Lorem Ipsum information for this area here.<br>Sample text only.</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
    </div>
  </template>
  
  <script>
  export default {
    name: 'ExampleComponent',
  }
  </script>
  
  <style scoped>

/* Container */
  .container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
  }
  /* Banner */
  .banner {
    position: relative;
    height: 900px;
    overflow: hidden;
  }
  
  .banner img {
    background-color: #210454;
    background-position: left ;
	  background-repeat:  no-repeat;
	  background-attachment: scroll;
	  background-size:  cover;	
    height: calc(150vh - 419px);
    display: flex;
    align-items: center;
  }
  
  .banner h1 {
    position: absolute;
    top: 40%;
    left: 21%;
    transform: translate(-50%, -50%);
    color: #fff;
    font-size: 36px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  }
  
  /* Services Information */
  .services {
    background-color: #f8f8f8;
    padding: 50px 0;
  }
  
  .services .container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
  }
  
  .services h2 {
    font-size: 24px;
    margin-bottom: 20px;
  }
  
  .services p {
    font-size: 16px;
  }
  
  /* Services Offer Information */
  .services-offer {
    background-color: grey;
    padding: 50px 0;
  }
  
  .services-offer .container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
  }
  
  .services-offer .card {
    width: 300px;
    padding: 20px;
    background-color: #f8f8f8;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-bottom: 20px;
  }
  
  .services-offer .card h3 {
    font-size: 18px;
    margin-bottom: 10px;
  }
  
  .services-offer .card p {
    font-size: 16px;
  }
  .chatbot_community{
    padding: 70px 0;
}
.chatbot_community h3{
    color: #210454;
    text-align:center;
    margin-bottom:  70px;
}
.community-row{
    width: 100%;
    max-width: 755;
    display: flex;
    margin: 0 auto;
    justify-content: space-around;
    margin-bottom: 70px;
}
.community-items_colored{
    width: 356px;
    height: 295px;
    border-radius: 30px;
    margin: 0 auto;
}
.community-items_texts{
    width: 356px;
    display: flex;
    align-items: center;
    margin: 0 auto;
    padding: 0 10px;
}
.background-purple{
    background-color: #BE57D6;
}
.background-ligh-blue{
    background-color: #18B7D7;
}
.background-section_light{
    background-color: #F4F7FC;
}
h3{
    line-height: 41px;
    font-size: 35px;
    font-weight: 700;
}
h4{
    line-height: 35px;
    font-size: 25px;
    font-weight: 600;
}
  </style>