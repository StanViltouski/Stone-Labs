 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());
 gtag('config', 'UA-33837333-4');
 
 setTimeout(function(){
      gtag('event', location.pathname, {
          'event_category': 'New visitor'
      });
  }, 15000);