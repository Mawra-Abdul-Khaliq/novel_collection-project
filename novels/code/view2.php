<!DOCTYPE html>
<html lang="en">
<head>
    <title>View</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    <div class="image-container">
        <img src="mushaf.jpeg" alt="mushaf" id="fullscreen-image">
        <div class="options">
           <a href="pdfs\Mushaf Novel By Nimra Ahmad.pdf"> <button id="open-pdf">Open pdf</button></a>
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
                <p>Some books have magic to change our way of thinking. For me Mushaf was that magic book which describes about another good book Mushaf mean Islamic book “ Quran e Pak” the last holy book
                    which Allah sent down to people for the whole life guide of man.  This is one of the best novel of Nimrah Ahmad which made me cried, emotional and introduced me with new perspective. 
                    I count this novel as one of my favorite novels. I really enjoyed the concept of the novel, the relation of Quran with life. The way writer described the importance of understanding
                    Quran by relating the different Quranic verse with different situation was unique and inspiring. This made the story more powerful. The novel made me to think in a different way. 
                    It made me realize that how wrong I did by reading Quran without understanding it meaning. I call this novel a guideline book for me as sometime all we need in our busy life was the reminder 
                    the guidance and this novel did this thing for me. 
                    Apart from this I must say the novel has brilliant theme, meaningful messages, strong characters, inspiring dialogue, great story and all that which a reader want in any novel. I recommend this novel to everyone especially to those who need to remember about religion and need some motivation. Those who want to read a great, amazing and inspiring novel not miss that novel.  I really enjoyed reading of this novel because it looked the story of me, the story of all of us not exactly in the same way but it links with our lives. I really like the message at the end and this is one of the reason I select this novel for my review which was its end not to stop motivating others toward the right path, knowledge of Quran. I really believed if one read this book he/she really get some motivation or lesson from this novel.</p>
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