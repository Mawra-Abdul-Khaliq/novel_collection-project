<!DOCTYPE html>
<html lang="en">
<head>
    <title>View</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    <div class="image-container">
        <img src="abehayat.jpeg" alt="abehayat" id="fullscreen-image">
        <div class="options">
           <a href="pdfs\Umera Ahmed - Aab e Hayat (UrduReadings.com).pdf"> <button id="open-pdf">Open pdf</button></a>
            <div class="ratings">
                <span>Ratings:</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
            </div>
            <div id="writer-name">
                <span>Writer: Umerah Ahmad</span>
            </div>
        </div>
    </div>
            <div class="Summary">
                <h2>Summary:</h2>
                <p>The main theme of Aab e Hayat is 'interest (سود)' which was pronounced as haram by Prophet Muhammad in his last Khutbah.
                    In this novel, the characters are the same but we also see some more characters introduced in it.</p>
            </div>
    <script>
        const fullscreenImage=document.getElementById("fullscreen-image");
        fullscreenImage.addEventListener("click",function()
        {
            if(fullscreenImage.requestFullscreen){
                fullscreenImage.requestFullscreen();
            }
        })
    </script>
</body>