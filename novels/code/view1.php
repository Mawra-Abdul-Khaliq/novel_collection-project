<!DOCTYPE html>
<html lang="en">
<head>
    <title>View</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    <div class="image-container">
        <img src="jkp.jpeg" alt="parizad" id="fullscreen-image">
        <div class="options">
           <a href="pdfs\051102274246_053662_0JannatKePattaynovelcompletebyNimraAhmed.pdf"> <button id="open-pdf">Open pdf</button></a>
            <div class="ratings">
                <span>Ratings:</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
            </div>
            <div id="writer-name">
                <span>Writer: Nemrah Ahmad</span>
            </div>
        </div>
    </div>
            <div class="Summary">
                <h2>Summary:</h2>
            <p>The novel is romantic and adventurous yet full of mystery and suspense. The story revolves around a young girl called ‘Haya” who discovers the importance of true Islam and takes big steps in her life to implement it which includes refusing to take of her hijab even when suggested by the man she loves most….she faces the criticism of her family and friends yet remains steadfast.
            Haya also has to handle several mysterious men who continue to interfere in her life and receives a shock when she discovers their true identity……
            The plot also describes the life and activities of a young man ‘Jahan Sikander’ who struggles to survive and make his place in society[after his father is declared a traitor to the pak army ] and ultimately establishes himself into what many Pakistani girls would call a hero….
            The two main characters are linked by childhood ‘nikah’, a marriage bond so strong that it plays a major part in the plot.</p>
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