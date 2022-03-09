<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administration</title>
  <link rel="stylesheet" href="{{asset('admin/css/base.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/forms.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/responsive.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/nav_sidebar.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/changelists.css')}}">

  @yield('css')
</head>
<body>
  <div id="container">
    <div id="header">
      <div id="branding">
        <h1 id="site-name"><a href="/admin/home">Administration</a></h1>
      </div>
      <div id="user-tools">
        <form action="/logout" method="post">
          @csrf
          <a href="/logout"
              onClick="event.preventDefault();
                  this.closest('form').submit();">
            Log out
          </a>
        </form>
      </div>
    </div>

    <div class="main shifted" id="main">         
      <button class="sticky toggle-nav-sidebar" id="toggle-nav-sidebar" aria-label="Toggle navigation"></button>
      <nav class="sticky" id="nav-sidebar">
        
          <div class="app-main module current-app">
            <table>
              
                <tbody><tr class="model-aboutus">
                  
                    <th scope="row"><a href="/admin/aboutus/" aria-current="page" tabindex="0">About Us</a></th>
                  

                  

                  

                  
                </tr>
              
                <tr class="model-achievement">
                  
                    <th scope="row"><a href="/admin/achievements/" tabindex="0">Achievements</a></th>
                  

                  
                    <td><a href="/admin/achievements/add/" class="addlink" tabindex="0">Add</a></td>
                  

                  
                </tr>
              
                <tr class="model-bigimages">
                  
                    <th scope="row"><a href="/admin/bigimages/" tabindex="0">Big Images</a></th>
                  

                  
                    <td><a href="/admin/bigimages/add/" class="addlink" tabindex="0">Add</a></td>
                  

                  
                </tr>
              
                <tr class="model-blog">
                  
                    <th scope="row"><a href="/admin/blogs/" tabindex="0">Blogs</a></th>
                  

                  
                    <td><a href="/admin/blogs/add/" class="addlink" tabindex="0">Add</a></td>
                  

                  
                </tr>
              
                <tr class="model-branch">
                  
                    <th scope="row"><a href="/admin/branches/" tabindex="0">Branches</a></th>
                  

                  
                    <td><a href="/admin/branches/add/" class="addlink" tabindex="0">Add</a></td>
                  

                  
                </tr>
              
                <tr class="model-callbackrequest">
                  
                    <th scope="row"><a href="/admin/callbackrequests/" tabindex="0">Call Back Requests</a></th>
                  

                  
                    <td></td>
                  

                  
                </tr>
              
                <tr class="model-contactus">
                  
                    <th scope="row"><a href="/admin/contactus/" tabindex="0">Contact Us</a></th>
                  

                  

                  

                  
                </tr>
              
                <tr class="model-gallery">
                  
                    <th scope="row"><a href="/admin/gallery/" tabindex="0">Gallery</a></th>
                  

                  
                    <td><a href="/admin/gallery/add/" class="addlink" tabindex="0">Add</a></td>
                  

                  
                </tr>
              
                <!-- <tr class="model-howitworks">
                  
                    <th scope="row"><a href="/admin/howitworks/" tabindex="0">How It Works</a></th>
                  

                  
                    <td><a href="/admin/howitworks/add/" class="addlink" tabindex="0">Add</a></td>
                  

                  
                </tr> -->
              
                <tr class="model-inquiry">
                  
                    <th scope="row"><a href="/admin/inquiries/" tabindex="0">Inquiries</a></th>
                  

                  
                    <td></td>
                  

                  
                </tr>
              
                <!-- <tr class="model-ourclient">
                  
                    <th scope="row"><a href="/admin/ourclient/" tabindex="0">Our Clients</a></th>
                  

                  
                    <td><a href="/admin/ourclient/add/" class="addlink" tabindex="0">Add</a></td>
                  

                  
                </tr> -->
              
                <!-- <tr class="model-process">
                  
                    <th scope="row"><a href="/admin/process/" tabindex="0">Process</a></th>
                  

                  
                    <td><a href="/admin/process/add/" class="addlink" tabindex="0">Add</a></td>
                  

                  
                </tr> -->
              
                <tr class="model-quickinquiry">
                  
                    <th scope="row"><a href="/admin/quickinquiries/" tabindex="0">Quick Inquiries</a></th>
                  

                  
                    <td></td>
                  

                  
                </tr>
            
              
                <tr class="model-seo">
                  
                    <th scope="row"><a href="/admin/seo/" tabindex="0">SEO</a></th>
                  

                  
                    
                  

                  
                </tr>
              
                <tr class="model-service">
                  
                    <th scope="row"><a href="/admin/services/" tabindex="0">Services</a></th>
                  

                  
                    <td><a href="/admin/services/add/" class="addlink" tabindex="0">Add</a></td>
                  

                  
                </tr>
              
                <!-- <tr class="model-whychooseus">
                  
                    <th scope="row"><a href="/admin/whychooseus/" tabindex="0">Why Choose Us</a></th>
                  

                  
                    <td><a href="/admin/whychooseus/add/" class="addlink" tabindex="0">Add</a></td>
                  

                  
                </tr> -->
              
            </tbody></table>
          </div>
        


      </nav>

        
      
      <div class="content">
        
      @yield('content')
        
      </div>
    </div>
  </div>
</body>
</html>