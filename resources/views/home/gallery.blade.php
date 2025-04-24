<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style>
    /* 🎨 Background & Base Styling */
.gallery {
    padding: 80px 0;
    background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
}

.gallery .titlepage h2 {
    font-size: 42px;
    font-weight: 800;
    color: #2a4365; /* Deep blue */
    margin-bottom: 50px;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
    font-family: 'Poppins', sans-serif;
}

.gallery .titlepage h2::after {
    content: "";
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    background: linear-gradient(90deg, #f59e0b, #ef4444); /* Gradient underline (orange-red) */
    border-radius: 2px;
}

/* 🖼️ Gallery Image Styling (Instagram-Like Grid) */
.gallery_img {
    margin-bottom: 25px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
}

.gallery_img::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, rgba(255,255,255,0.1), rgba(255,255,255,0.3));
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 1;
}

.gallery_img:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
}

.gallery_img:hover::before {
    opacity: 1;
}

.gallery_img figure {
    margin: 0;
    padding: 0;
    position: relative;
    overflow: hidden;
    aspect-ratio: 1/1; /* Perfect square images */
}

.gallery_img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.gallery_img:hover img {
    transform: scale(1.1);
}

/* ✨ Overlay Effect (Optional) */
.gallery_img figcaption {
    position: absolute;
    bottom: -50px;
    left: 0;
    width: 100%;
    padding: 15px;
    background: rgba(0, 0, 0, 0.7);
    color: white;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    text-align: center;
    transition: bottom 0.3s ease;
    z-index: 2;
}

.gallery_img:hover figcaption {
    bottom: 0;
}

/* 📱 Responsive Adjustments */
@media (max-width: 992px) {
    .gallery .col-md-3 {
        flex: 0 0 33.33%; /* 3 images per row */
        max-width: 33.33%;
    }
}

@media (max-width: 768px) {
    .gallery .col-md-3 {
        flex: 0 0 50%; /* 2 images per row */
        max-width: 50%;
    }
}

@media (max-width: 576px) {
    .gallery .col-md-3 {
        flex: 0 0 100%; /* 1 image per row */
        max-width: 100%;
    }
}
   </style>
</head>
<body>
   
</body>
</html>
<div  class="gallery">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="titlepage">
              <h2>Gallery</h2>
           </div>
        </div>
     </div>
     <div class="row">
      @foreach ($gallery as $gallery)
          
      <div class="col-md-3 col-sm-6">
         <div class="gallery_img">
            <figure><img src="/gallery/{{$gallery->image}}" alt="#"/></figure>
         </div>
      </div>
      
      @endforeach
     </div>
  </div>
</div>