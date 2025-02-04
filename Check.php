<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Check8</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/utilities.css" />
    <link rel="stylesheet" href="assets/css/gpt2.css" />
    <!-- normalize.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- icon -->
    <link rel="icon" type="image/x-icon" href="assets/images/Medica_icon_1.png">
</head>

<body>
    <div class="page-wrapper"></div>
    <!-- header -->
    <header class="header" style="min-height: 15vh;"> <!-- هنا الإرتفاع ده 21 وهمى-->
        <nav class="navbar" style="padding: 35px 0 35px 0;">
            <div class="container">
                <div class="navbar-content d-flex justify-content-between align-items-center">
                    <div class="brand-and-toggler d-flex align-items-center justify-content-between">
                        <a href="index.php" class="navbar-brand d-flex align-items-center">
                            <span><img src="assets/images/Medica_icon_2.png" alt="" style="width: 45px;"></span>
                            <span class="brand-text fw-7">Medica</span>
                        </a>
                        <button type="button" class="d-none navbar-show-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <div class="navbar-box">
                        <button type="button" class="navbar-hide-btn">
                            <i class="fas fa-times"></i>
                        </button>
                        <ul class="navbar-nav d-flex align-items-center">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link text-white text-nowrap">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php #Cancerous_diseases"
                                    class="nav-link text-white text-nowrap">Cancers</a>
                            </li>
                            <li class="nav-item">
                                <a href="Check.php" class="nav-link text-white nav-active text-nowrap">Check</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php #mobile_app" class="nav-link text-white text-nowrap">Mobile App</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php #about_section" class="nav-link text-white text-nowrap">About us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="pulse_Animate chatbox__button">
            <div class="pulse">
                <img src="assets/images/chatbot.png" alt=""> <!--style="float: left; position:fixed;"-->
                <span style="--i:0;"></span>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <!--####################################################################################################-->
    <!-- aout chatbot -->
    <div class="container">
        <div class="chatbox">
            <div class="chatbox__support">
                <div class="chatbox__header">
                    <div class="chatbox__image--header">
                        <img src="https://img.icons8.com/color/48/000000/circled-user-male-skin-type-5--v1.png"
                            alt="image">
                    </div>
                    <div class="chatbox__content--header">
                        <h4 class="chatbox__heading--header">Medica Chat</h4>
                        <p class="chatbox__description--header">Hi. This is Medica chatbot. How can I help you?</p>
                    </div>
                </div>
                <div class="chatbox__messages">
                    <div></div>
                </div>
                <div class="chatbox__footer">
                    <input type="text" placeholder="Write a message...">
                    <button class="chatbox__send--footer send__button">Send</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Chatboot -->

    <!-- #####################################################-->
    <!--########################### Content ##################-->
    <!-- #####################################################-->
    <div class="option-list">
        <div class="select-box">
            <select id="option-selector">
                <option value="">Choose Cancer</option>
                <option value="option1">Brain Tuomer</option>
                <option value="option2">Skin Caner</option>
                <option value="option3">Histopathologic Caner</option>
                <option value="option4">Lung Caner</option>
                <option value="option5">Breast Caner</option>
                <option value="option6">Kidney Caner</option>
                <option value="option7">Oral Caner</option>
                <option value="option8">Thyroid Caner</option>
                <option value="option9">Prostate Caner</option>
                <option value="option10">Caner 1</option>
                <option value="option11">Caner 2</option>
                <option value="option12">Caner 3</option>
            </select>
        </div>

        <!-- Option 1: Brain Tuomer -->
        <div id="option1-content" class="option-content" style="display:none;">
            <form method="post" class="container wrapper">
                <header>Medica Uploader File</header>
                <div id="drop-area1" onclick="triggerFileInput(1)" class="drop-area">
                    <!-- <p>Drag & Drop your image here</p> -->
                    <input type="file" id="file-input1" multiple accept="image/*" style="display:none;">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <p>
                        Choose images from your files, <br> &emsp;&emsp;&ensp; or drag & drop here
                    </p>

                </div>
                <div id="image-display1" class="figure"></div>
                <div id="response1">
                    <!-- Image and result will be displayed here -->
                </div>
                <div class="d-flex align-items-center justify-content-center services-main-btn"
                    style="margin-top: 12%;">
                    <button class="btn btn-primary-outline" type="button"
                        onclick="uploadImage('brain','file-input1',1)">Upload and
                        Process</button>
                </div>

            </form>
        </div>

        <!-- Option 2: Skin Caner -->
        <div id="option2-content" class="option-content" style="display:none;">
            <form method="post" class="container wrapper">

                <header>Medica Uploader File</header>
                <div id="drop-area2" onclick="triggerFileInput(2)" class="drop-area">
                    <!-- <p>Drag & Drop your image here</p> -->
                    <input type="file" id="file-input2" accept="image/*" style="display:none;">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <p>
                        Choose images from your files, <br> &emsp;&emsp;&ensp; or drag & drop here
                    </p>
                    <!-- <button onclick="triggerFileInput(2)">Select Image</button> -->
                </div>
                <div id="image-display2" class="figure"></div>
                <div id="response2">
                    <!-- Image and result will be displayed here -->
                </div>
                <div class="d-flex align-items-center justify-content-center services-main-btn"
                    style="margin-top: 12%;">
                    <button class="btn btn-primary-outline" type="button"
                        onclick="uploadImage('skin','file-input2',2)">Upload and
                        Process</button>
                </div>
            </form>

        </div>

        <!-- Option 3: Histopathologic Caner -->
        <div id="option3-content" class="option-content" style="display:none;">
            <div class="container wrapper">
                <header>Medica Uploader File</header>
                <div id="drop-area3" onclick="triggerFileInput(3)" class="drop-area">
                    <!-- <p>Drag & Drop your image here</p> -->
                    <input type="file" id="file-input3" accept="image/*" style="display:none;">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <p>
                        Choose images from your files, <br> &emsp;&emsp;&ensp; or drag & drop here
                    </p>
                    <!-- <button onclick="triggerFileInput(3)">Select Image</button> -->
                </div>
                <div id="image-display3" class="figure"></div>
                <div class="d-flex align-items-center justify-content-center services-main-btn"
                    style="margin-top: 12%;">
                    <button class="btn btn-primary-outline" type="button"
                        onclick="uploadImage('Histopathologic')">Upload and Process</button>
                </div>
            </div>
        </div>

        <!-- Option 4: Lung Caner (Choose Upload Photo or Disease Symptoms) -->
        <div id="option4-content" class="option-content" style="display:none;">
            <div class="option_button">
                <button onclick="toggleOptionAction(4, 'upload')">Upload a Photo</button>
                <button onclick="toggleOptionAction(4, 'symptoms')">Choose Disease Symptoms</button>
            </div>
            <!-- Upload Photo Section for Option 4 -->
            <div id="upload-photo4" class="container wrapper" style="display:none;">
                <header>Medica Uploader File</header>
                <div id="drop-area4" onclick="triggerFileInput(4)" class="drop-area">
                    <!-- <p>Drag & Drop your image here</p> -->
                    <input type="file" id="file-input4" accept="image/*" style="display:none;">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <p>
                        Choose images from your files, <br> &emsp;&emsp;&ensp; or drag & drop here
                    </p>
                    <!-- <button onclick="triggerFileInput(4)">Select Image</button> -->
                </div>
                <div id="image-display4" class="figure"></div>
                <div class="d-flex align-items-center justify-content-center services-main-btn"
                    style="margin-top: 12%;">
                    <button class="btn btn-primary-outline" type="button" onclick="uploadImage('Lung')">Upload and
                        Process</button>
                </div>
            </div>

            <!-- Disease Symptoms Section for Option 4 -->
            <div id="disease-symptoms4" class="regist_container" style="display:none;">
                <div class="title">Choose Disease Symptoms</div>
                <!-- <h4>Choose Disease Symptoms (Yes/No)</h4> -->
                <form action="#">
                    <div class="symptom-option">
                        <label>1. Yellow Fingers:</label>
                        Yes <input type="radio" name="yellow_fingers" value="yes">
                        No <input type="radio" name="yellow_fingers" value="no">
                    </div>
                    <div class="symptom-option">
                        <label>2. Anxiety:</label>
                        Yes <input type="radio" name="anxiety" value="yes">
                        No <input type="radio" name="anxiety" value="no">
                    </div>
                    <div class="symptom-option">
                        <label>3. Peer Pressure:</label>
                        Yes <input type="radio" name="peer_pressure" value="yes">
                        No <input type="radio" name="peer_pressure" value="no">
                    </div>
                    <div class="symptom-option">
                        <label>4. Chronic Disease:</label>
                        Yes <input type="radio" name="chronic_disease" value="yes">
                        No <input type="radio" name="chronic_disease" value="no">
                    </div>
                    <div class="symptom-option">
                        <label>5. Fatigue:</label>
                        Yes <input type="radio" name="fatigue" value="yes">
                        No <input type="radio" name="fatigue" value="no">
                    </div>
                    <div class="symptom-option">
                        <label>6. Allergy:</label>
                        Yes <input type="radio" name="allergy" value="yes">
                        No <input type="radio" name="allergy" value="no">
                    </div>
                    <div class="symptom-option">
                        <label>7. Wheezing:</label>
                        Yes <input type="radio" name="wheezing" value="yes">
                        No <input type="radio" name="wheezing" value="no">
                    </div>
                    <div class="symptom-option">
                        <label>8. Alcohol Consuming:</label>
                        Yes <input type="radio" name="alcohol_consuming" value="yes">
                        No <input type="radio" name="alcohol_consuming" value="no">
                    </div>
                    <div class="symptom-option">
                        <label>9. Coughing:</label>
                        Yes <input type="radio" name="coughing" value="yes">
                        No <input type="radio" name="coughing" value="no">
                    </div>
                    <div class="symptom-option">
                        <label>10. Swallowing Difficulty:</label>
                        Yes <input type="radio" name="swallowing_difficulty" value="yes">
                        No <input type="radio" name="swallowing_difficulty" value="no">
                    </div>
                    <div class="symptom-option">
                        <label>11. Chest Pain:</label>
                        Yes <input type="radio" name="chest_pain" value="yes">
                        No <input type="radio" name="chest_pain" value="no">
                    </div>
                    <div class="button">
                        <input type="submit" value="Predict cancer">
                        <!-- value ==> No Register ==> Type ==> No submit-->
                    </div>
                </form>
            </div>
        </div>

        <!-- Option 5: Breast Caner (Choose Upload Photo or Disease Symptoms) -->
        <div id="option5-content" class="option-content" style="display:none;">
            <div class="option_button">
                <button onclick="toggleOptionAction(5, 'upload')">Upload a Photo</button>
                <button onclick="toggleOptionAction(5, 'symptoms')">Choose Disease Symptoms</button>
            </div>
            <!-- Upload Photo Section for Option 5 -->
            <div id="upload-photo5" class="container wrapper" style="display:none;">
                <header>Medica Uploader File</header>
                <div id="drop-area5" onclick="triggerFileInput(5)" class="drop-area">
                    <!-- <p>Drag & Drop your image here</p> -->
                    <input type="file" id="file-input5" accept="image/*" style="display:none;">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <p>
                        Choose images from your files, <br> &emsp;&emsp;&ensp; or drag & drop here
                    </p>
                    <!-- <button onclick="triggerFileInput(5)">Select Image</button> -->
                </div>
                <div id="image-display5" class="figure"></div>
            </div>

            <!-- Disease Symptoms Section for Option 5 -->
            <div id="disease-symptoms5" class="regist_container" style="display:none;">
                <div class="title">Enter Disease Symptoms</div>
                <!-- <h4>Enter Disease Symptoms</h4> -->
                <div class="regist_content">
                    <form action="#">
                        <div class="user-details">

                            <!-- Input for Clump Thickness -->
                            <div class="regist_input_box">
                                <span class="details">Clump Thickness</span>
                                <input type="text" placeholder="Clump Thickness	" required>
                            </div>
                            <!-- Input for Uniform Cell size -->
                            <div class="regist_input_box">
                                <span class="details">Uniform Cell size</span>
                                <input type="text" placeholder="Uniform Cell size" required>
                            </div>
                            <!-- Input for Uniform cell shape -->
                            <div class="regist_input_box">
                                <span class="details">Uniform cell shape</span>
                                <input type="text" placeholder="Uniform cell shape" required>
                            </div>
                            <!-- Input for Marginal Adhesion -->
                            <div class="regist_input_box">
                                <span class="details">Marginal Adhesion</span>
                                <input type="text" placeholder="Marginal Adhesion" required>
                            </div>
                            <!-- Input for Single epithelial cell size -->
                            <div class="regist_input_box">
                                <span class="details">Single epithelial cell size</span>
                                <input type="text" placeholder="Single epithelial cell size" required>
                            </div>
                            <!-- Input for Bare Nuclei -->
                            <div class="regist_input_box">
                                <span class="details">Bare Nuclei</span>
                                <input type="text" placeholder="Bare Nuclei" required>
                            </div>
                            <!-- Input Bland Chromatin -->
                            <div class="regist_input_box">
                                <span class="details">Bland Chromatin</span>
                                <input type="text" placeholder="Bland Chromatin" required>
                            </div>
                            <!-- Input for Normal Nucleoli -->
                            <div class="regist_input_box">
                                <span class="details">Normal Nucleoli</span>
                                <input type="text" placeholder="Normal Nucleoli" required>
                            </div>
                            <!-- Input for Mitoses -->
                            <div class="regist_input_box">
                                <span class="details">Mitoses</span>
                                <input type="text" placeholder="Mitoses" required>
                            </div>
                        </div>
                        <!-- Submit button -->
                        <div class="button">
                            <input type="submit" value="Predict cancer">
                            <!-- value ==> No Register ==> Type ==> No submit-->
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Option 6: Kidney Caner -->
        <div id="option6-content" class="option-content" style="display:none;">
            <div class="container wrapper">
                <header>Medica Uploader File</header>
                <div id="drop-area6" onclick="triggerFileInput(6)" class="drop-area">
                    <!-- <p>Drag & Drop your image here</p> -->
                    <input type="file" id="file-input6" accept="image/*" style="display:none;">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <p>
                        Choose images from your files, <br> &emsp;&emsp;&ensp; or drag & drop here
                    </p>
                    <!-- <button onclick="triggerFileInput(6)">Select Image</button> -->
                </div>
                <div id="image-display6" class="figure"></div>
            </div>
        </div>

        <!-- Option 7: Oral Caner -->
        <div id="option7-content" class="option-content" style="display:none;">
            <form method="post" class="container wrapper">

                <header>Medica Uploader File</header>
                <div id="drop-area7" onclick="triggerFileInput(7)" class="drop-area">
                    <!-- <p>Drag & Drop your image here</p> -->
                    <input type="file" id="file-input7" accept="image/*" style="display:none;">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <p>
                        Choose images from your files, <br> &emsp;&emsp;&ensp; or drag & drop here
                    </p>
                    <!-- <button onclick="triggerFileInput(7)">Select Image</button> -->
                </div>
                <div id="image-display7" class="figure"></div>
                <div id="response7">
                    <!-- Image and result will be displayed here -->
                </div>
                <div class="d-flex align-items-center justify-content-center services-main-btn"
                    style="margin-top: 12%;">
                    <button class="btn btn-primary-outline" type="button"
                        onclick="uploadImage('oral','file-input7',7)">Upload and
                        Process</button>
                </div>

            </form>
        </div>
    </div>

    <!-- Option 8: Thyroid Cancer (Disease Symptoms) -->
    <div id="option8-content" class="option-content" style="display:none;">
        <!-- Disease Symptoms Section for Option 8 -->
        <div id="disease-symptoms8" class="regist_container">
            <div class="title">Enter Disease Symptoms</div>
            <div class="regist_content">
                <form action="#">
                    <div class="user-details">
                        <!-- Input for Clump Thickness -->
                        <div class="regist_input_box">
                            <span class="details">Clump Thickness</span>
                            <input type="text" placeholder="Clump Thickness" required>
                        </div>
                        <!-- Input for Uniform Cell Size -->
                        <div class="regist_input_box">
                            <span class="details">Uniform Cell Size</span>
                            <input type="text" placeholder="Uniform Cell Size" required>
                        </div>
                        <!-- Input for Uniform Cell Shape -->
                        <div class="regist_input_box">
                            <span class="details">Uniform Cell Shape</span>
                            <input type="text" placeholder="Uniform Cell Shape" required>
                        </div>
                        <!-- Input for Marginal Adhesion -->
                        <div class="regist_input_box">
                            <span class="details">Marginal Adhesion</span>
                            <input type="text" placeholder="Marginal Adhesion" required>
                        </div>
                        <!-- Input for Single Epithelial Cell Size -->
                        <div class="regist_input_box">
                            <span class="details">Single Epithelial Cell Size</span>
                            <input type="text" placeholder="Single Epithelial Cell Size" required>
                        </div>
                        <!-- Input for Bare Nuclei -->
                        <div class="regist_input_box">
                            <span class="details">Bare Nuclei</span>
                            <input type="text" placeholder="Bare Nuclei" required>
                        </div>
                        <!-- Input for Bland Chromatin -->
                        <div class="regist_input_box">
                            <span class="details">Bland Chromatin</span>
                            <input type="text" placeholder="Bland Chromatin" required>
                        </div>
                        <!-- Input for Normal Nucleoli -->
                        <div class="regist_input_box">
                            <span class="details">Normal Nucleoli</span>
                            <input type="text" placeholder="Normal Nucleoli" required>
                        </div>
                        <!-- Input for Mitoses -->
                        <div class="regist_input_box">
                            <span class="details">Mitoses</span>
                            <input type="text" placeholder="Mitoses" required>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="button">
                        <input type="submit" value="Predict Cancer">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Option 9: Prostate Cancer (Disease Symptoms) -->
    <div id="option9-content" class="option-content" style="display:none;">
        <!-- Disease Symptoms Section for Option 9 -->
        <div id="disease-symptoms9" class="regist_container">
            <div class="title">Enter Disease Symptoms</div>
            <div class="regist_content">
                <form action="#">
                    <div class="user-details">
                        <!-- Input for Radius -->
                        <div class="regist_input_box">
                            <span class="details">Radius</span>
                            <input type="text" placeholder="Radius" required>
                        </div>
                        <!-- Input for Texture -->
                        <div class="regist_input_box">
                            <span class="details">Texture</span>
                            <input type="text" placeholder="Texture" required>
                        </div>
                        <!-- Input for Perimeter -->
                        <div class="regist_input_box">
                            <span class="details">Perimeter</span>
                            <input type="text" placeholder="Perimeter" required>
                        </div>
                        <!-- Input for Area -->
                        <div class="regist_input_box">
                            <span class="details">Area</span>
                            <input type="text" placeholder="Area" required>
                        </div>
                        <!-- Input for Smoothness -->
                        <div class="regist_input_box">
                            <span class="details">Smoothness</span>
                            <input type="text" placeholder="Smoothness" required>
                        </div>
                        <!-- Input for Compactness -->
                        <div class="regist_input_box">
                            <span class="details">Compactness</span>
                            <input type="text" placeholder="Compactness" required>
                        </div>
                        <!-- Input forSymmetry -->
                        <div class="regist_input_box">
                            <span class="details">Symmetry</span>
                            <input type="text" placeholder="Symmetry" required>
                        </div>
                        <!-- Input for Fractal Dimension -->
                        <div class="regist_input_box">
                            <span class="details">Fractal Dimension</span>
                            <input type="text" placeholder="Fractal Dimension" required>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="button">
                        <input type="submit" value="Predict Cancer">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Option 10: Brain Tuomer -->
    <div id="option10-content" class="option-content" style="display:none;">
        <div class="container wrapper">
            <header>Medica Uploader File</header>
            <div id="drop-area10" onclick="triggerFileInput(10)" class="drop-area">
                <!-- <p>Drag & Drop your image here</p> -->
                <input type="file" id="file-input10" accept="image/*" style="display:none;">
                <i class="fas fa-cloud-upload-alt"></i>
                <p>
                    Choose images from your files, <br> &emsp;&emsp;&ensp; or drag & drop here
                </p>
                <!-- <button onclick="triggerFileInput(10)">Select Image</button> -->
            </div>
            <div id="image-display10" class="figure"></div>
        </div>
    </div>
    <!-- Option 11: Brain Tuomer -->
    <div id="option11-content" class="option-content" style="display:none;">
        <div class="container wrapper">
            <header>Medica Uploader File</header>
            <div id="drop-area11" onclick="triggerFileInput(11)" class="drop-area">
                <!-- <p>Drag & Drop your image here</p> -->
                <input type="file" id="file-input11" accept="image/*" style="display:none;">
                <i class="fas fa-cloud-upload-alt"></i>
                <p>
                    Choose images from your files, <br> &emsp;&emsp;&ensp; or drag & drop here
                </p>
                <!-- <button onclick="triggerFileInput(11)">Select Image</button> -->
            </div>
            <div id="image-display11" class="figure"></div>
        </div>
    </div>
    <!-- Option 12: Brain Tuomer -->
    <div id="option12-content" class="option-content" style="display:none;">
        <div class="container wrapper">
            <header>Medica Uploader File</header>
            <div id="drop-area12" onclick="triggerFileInput(12)" class="drop-area">
                <!-- <p>Drag & Drop your image here</p> -->
                <input type="file" id="file-input12" accept="image/*" style="display:none;">
                <i class="fas fa-cloud-upload-alt"></i>
                <p>
                    Choose images from your files, <br> &emsp;&emsp;&ensp; or drag & drop here
                </p>
                <!-- <button onclick="triggerFileInput(12)">Select Image</button> -->
            </div>
            <div id="image-display12" class="figure"></div>
        </div>
    </div>

    </div>
    <!-- ####################################################################################################################################### -->

    <!-- Start of footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-list d-grid text-white">
                    <div class="footer-item">
                        <a href="index.php" class="navbar-brand d-flex align-items-center">
                            <span><img src="assets/images/Medica_icon_2.png" alt="" style="width: 45px;"></span>
                            <span class="brand-text fw-7">Medica</span>
                        </a>
                        <p class="text-white">Medica provides progressive, and affordable healthcare, accessible on
                            mobile and online for everyone</p>
                        <p class="text-white copyright-text">&copy; Medica PTY LTD 2024. All rights reserved.</p>
                    </div>

                    <div class="footer-item">
                        <h3 class="footer-item-title">Company</h3>
                        <ul class="footer-links">
                            <li><a href="index.php #about_section">About</a></li>
                            <li><a href="#">Find a doctor</a></li>
                            <li><a href="index.php #mobile_app">mobile app</a></li>
                        </ul>
                    </div>

                    <div class="footer-item">
                        <h3 class="footer-item-title">Region</h3>
                        <ul class="footer-links">
                            <li><a href="#">Germany</a></li>
                            <li><a href="#">USA</a></li>
                            <li><a href="#">Hongkong</a></li>
                            <li><a href="#">Canada</a></li>
                        </ul>
                    </div>

                    <div class="footer-item">
                        <h3 class="footer-item-title">Help</h3>
                        <ul class="footer-links">
                            <li><a href="#">Help center</a></li>
                            <li><a href="#">Contact support</a></li>
                            <li><a href="#">Instructions</a></li>
                            <li><a href="#">How it works</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-element-1">
            <img src="assets/images/element-img-4.png" alt="">
        </div>
        <div class="footer-element-2">
            <img src="assets/images/element-img-5.png" alt="">
        </div>
    </footer>
    <!-- End of footer -->

    </div>

    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- custom js -->
    <script src="assets/js/script.js"></script>
    <!-- scroll js -->
    <!-- <script src="assets/js/scroll.js"></script> -->
    <!-- chatbot js -->
    <script src="assets/js/chatbot.js"></script>
    <!-- chatbot js -->
    <!-- <script src="assets/js/uploader.js"></script> -->
    <!-- ajax upload img.js -->


    <script>
        // Show content for the selected option
        document.getElementById("option-selector").addEventListener("change", function () {
            var selectedOption = this.value;

            // Hide all content sections first
            var contentSections = document.querySelectorAll(".option-content");
            contentSections.forEach(function (section) {
                section.style.display = "none";
            });

            // Show the content of the selected option
            if (selectedOption) {
                document.getElementById(selectedOption + "-content").style.display = "block";
            }
        });

        // Function to trigger file input selection
        function triggerFileInput(option) {
            document.getElementById("file-input" + option).click();
        }

        // Handle image file selection or drag-and-drop for all options
        for (let i = 1; i <= 12; i++) {
            document.getElementById("file-input" + i).addEventListener("change", function (event) {
                handleFileSelect(event, i);
            });

            document.getElementById("drop-area" + i).addEventListener("dragover", function (event) {
                handleDragOver(event);
            });

            document.getElementById("drop-area" + i).addEventListener("drop", function (event) {
                handleFileDrop(event, i);
            });
        }

        // Handle file selection
        function handleFileSelect(event, option) {
            event.preventDefault();
            var file = event.target.files[0];
            if (file) {
                displayImage(file, option);
            }
        }

        // Handle drag and drop functionality
        function handleDragOver(event) {
            event.preventDefault();
            event.stopPropagation();
            event.dataTransfer.dropEffect = "copy";
        }

        function handleFileDrop(event, option) {
            event.preventDefault();
            event.stopPropagation();
            var file = event.dataTransfer.files[0];
            if (file) {
                displayImage(file, option);
                //////////////////////////////////////////////////////////////////////////
                // Store the dropped file into the corresponding file input
                var fileInput = document.getElementById("file-input" + option);
                var dataTransfer = new DataTransfer();  // Create DataTransfer object
                dataTransfer.items.add(file);  // Add dropped file
                fileInput.files = dataTransfer.files;  // Assign files to input
            }
        }

        // Function to display the selected image
        function displayImage(file, option) {
            var reader = new FileReader();
            reader.onload = function (event) {
                var image = new Image();
                image.src = event.target.result;
                image.alt = "Uploaded Image";
                document.getElementById("image-display" + option).innerHTML = "";
                document.getElementById("image-display" + option).appendChild(image);
            };
            reader.readAsDataURL(file);
        }
        //////////////////////////////////////////////////////////////////////////
        // Toggle between upload photo or disease symptoms selection
        function toggleOptionAction(option, action) {
            if (action === 'upload') {
                document.getElementById("upload-photo" + option).style.display = "block";
                document.getElementById("disease-symptoms" + option).style.display = "none";
            } else if (action === 'symptoms') {
                document.getElementById("upload-photo" + option).style.display = "none";
                document.getElementById("disease-symptoms" + option).style.display = "block";
            }
        }

        // Option 4 - Disease Symptoms (Yes/No) event listeners
        const symptoms = [
            "yellow-fingers", "anxiety", "peer-pressure", "chronic-disease",
            "fatigue", "allergy", "wheezing", "alcohol-consuming",
            "coughing", "swallowing-difficulty", "chest-pain"
        ];

        symptoms.forEach(symptom => {
            document.getElementById(symptom + "-yes").addEventListener("change", function () {
                console.log(symptom.replace("-", " ") + ": Yes");
            });
            document.getElementById(symptom + "-no").addEventListener("change", function () {
                console.log(symptom.replace("-", " ") + ": No");
            });
        });

        // Show content for the selected option Option 8 and Option 9
        document.getElementById("option-selector").addEventListener("change", function () {
            var selectedOption = this.value;

            // Hide all content sections first
            var contentSections = document.querySelectorAll(".option-content");
            contentSections.forEach(function (section) {
                section.style.display = "none";
            });

            // Show the content of the selected option
            if (selectedOption) {
                document.getElementById(selectedOption + "-content").style.display = "block";
            }

            // Ensure Option 8 and Option 9 always display the disease symptoms section
            if (selectedOption === "option8") {
                document.getElementById("disease-symptoms8").style.display = "block";
            } else {
                document.getElementById("disease-symptoms8").style.display = "none";
            }

            if (selectedOption === "option9") {
                document.getElementById("disease-symptoms9").style.display = "block";
            } else {
                document.getElementById("disease-symptoms9").style.display = "none";
            }
        });
        //////////////////////////////////////////////////////////////////////////
        // Function to upload image
        function uploadImage(model, id2, option) {
            var image_input = document.getElementById(id2);
            var id = model;

            console.log("Image input element:", image_input);

            if (!image_input.files.length) {
                alert("Please select an image!");
                return;
            }

            console.log("Files selected:", image_input.files);

            var formData = new FormData();
            formData.append("image", image_input.files[0]);
            formData.append("id", id);
            // console.log("FormData content:", formData.get("image"));

            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function () {
                console.log("XHR readyState:", xhr.readyState, "Status:", xhr.status);
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        document.getElementById("response" + option).innerHTML = xhr.responseText;
                        // console.log("Response received:", xhr.responseText);
                    } else {
                        alert("Error uploading image: " + xhr.status);
                    }
                }
            };

            // console.log("Sending request to:", "backend/upload.php?id=" + id);
            xhr.open("POST", "backend/upload.php", true);
            xhr.send(formData);
        }



    </script>
</body>

</html>