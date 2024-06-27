<!DOCTYPE html>
<html lang="en">
<head>
    <title>View</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    <div class="image-container">
        <img src="parizad.jpeg" alt="parizad" id="fullscreen-image">
        <div class="options">
           <a href="pdfs\Hashim Nadeem - Parizaad.pdf"> <button id="open-pdf">Open pdf</button></a>
            <div class="ratings">
                <span>Ratings:</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
            </div>
            <div id="writer-name">
                <span>Writer: Hashim Nadeem</span>
            </div>
            <div class="Summary">
                <h2>Summary:</h2>
               <p> The story revolves around a dark-skinned college student, Parizaad who has grown up with self-esteem problems and confidence issues. Despite society's judgement of him,
                he is very hardworking, extremely respectful and well-mannered, and creates a lasting impression on anyone he meets. This drama takes us along his journey of the friends
                and enemies he meets in his life as he tackles with his inner fight of choosing his true passion of poetry or choosing a realistic job that can provide income for his family.
                Parizaad is an innocent boy living in Rawalpindi with his brothers. Due to his dark skin, he is often ridiculed. His brothers and sisters-in-law are greedy and consider him to
                be a liability. Only his sister Saeeda loves him. But she is married to an old man due to family pressure.</p>
        </div>
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