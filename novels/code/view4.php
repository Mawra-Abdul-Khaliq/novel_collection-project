<!DOCTYPE html>
<html lang="en">
<head>
    <title>View</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    <div class="image-container">
        <img src="amarbail.jpeg" alt="amarbail" id="fullscreen-image">
        <div class="options">
           <a href="pdfs\Amarbail By Umera Ahmed (UrduReadings.com).pdf"> <button id="open-pdf">Open pdf</button></a>
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
                <p>Amar Bail  is a love story of Umar Jehangir and Aleezay Sikandar, set-up in the backdrop of Pakistani bureaucratic culture. It is a story of imbalanced relationships,
                    broken families, lust for power, complexes, insecurities and amidst all problems of love, its intensity and sacrifices. It depicts the true face of our bureaucratic system, highlighting 
                    social evils like corruption, nepotism and injustice and how at times going against the law is the only way to punish the culprits. The novel touches your heart by its brilliant portrayal
                    of human emotions and psychology.The book follows a story on Umar and Aleezay’s life with a touch of romance and a major ongoing issue in Pakistan – corruption. Most but not all are corrupted,
                    especially those in politics. The story also covers about broken family, insecurities and some other things that may be considered sensitive to some readers. Amar Bail was intriguing to say 
                    the least, and it has made so emotional which I absolutely enjoy in books.  If you like books that keeps you on edge and makes you want to finish in one sitting, this may be the right pick for 
                    you.</p>
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