<?php include('partials/header.php'); ?>
<?php include('partials/topbar.php'); ?>
<?php include('partials/sidebar.php'); ?>


  <section class="main-content">
    <div class="bcp-con">

        <div class="blog-top-container">
            <h2 class="header_label">ADD A POST</h2>
            <button class="cancel_btn" >x</button>
        </div>
    <div class="blog-new-post-con">
        <div class="blog-left-container">

            <div class="upload-image">
                <img class="upload-image-icon" src="images/svg/icons8-album-100.png" alt="">
                <h5><b>Drag And Drop Your Images Here</b></h5>
                <h6> or <a href=""><u><b>browse</b></u></a> from your computer </h6>
            </div>

            <div class="post-details">

                <h4>Create a New Post</h4>
                <div class="post-input-fields">
                    <input class="input-fields" type="text" placeholder="Title" class="input">
                    <textarea class="input-fields"  name="" id="" cols="30" rows="10" placeholder="Content" class="input"></textarea>
                    <input class="input-fields" type="text" placeholder="Designer Name" class="input">
                    <input class="input-fields" type="text" placeholder="Date" class="input">
                    <input class="input-fields" type="text" placeholder="Category" class="input"><!-- select viewers -->
                </div>
                <div class="post-buttons">
                    <button class="discard_btn">DISCARD</button>
                    <button class="post_btn">POST</button>
                    <button class="preview_btn">PREVIEW</button>
                </div>

            </div>
        </div>

        <div class="blog-right-container">

            <h3>POST PREVIEW</h3>

            <div class="preview-card">
                <div class="blog-card-image">
                    <img src="images/blog/blog1.jpg" alt="">
                </div>
                <div class="blog-card-content">
                    <h4><b>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</b></h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore ullam obcaecati molestias eos, sit quod laudantium recusandae error id neque tempora quaerat esse numquam veritatis exercitationem ipsum at? Sed, autem!
                    <a href="#" class="btn">Read More</a></p>
                    
                    <div class="blog-card-bot-section">
                        <img src="" alt="">
                        <p class="Designer" >Designer Name</p>
                        <p>12th Dec 2023</p>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
    </div>

  </section>

<?php include('partials/footer.php'); ?>