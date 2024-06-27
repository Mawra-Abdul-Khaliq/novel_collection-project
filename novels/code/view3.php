<!DOCTYPE html>
<html lang="en">
<head>
    <title>View</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    <div class="image-container">
        <img src="peerekamil.jpeg" alt="peerekamil" id="fullscreen-image">
        <div class="options">
           <a href="pdfs\Peer e Kamil novel pdf download by Umera Ahmad.pdf"> <button id="open-pdf">Open pdf</button></a>
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
                <p>The story's protagonist, Imama Hashim, belongs to an influential Ahmadiyya Muslim family living in Islamabad. She decides to convert to Sunni Islam after being influenced by her friends. She attends her
                    senior shabiha's lectures in secrecy from her family and her roommates, Javeria and Rabia. While studying in a medical school in Lahore, she falls in love with her friend Zainab's elder brother, doctor
                    Jalal Ansar. But Imama's family tries to coerce her into marrying her first cousin Asjad, which is unacceptable to her, her parents respond by grounding her and taking away her cellphone.
                    Imama seeks help from Salar whom she is antagonistic with since she is a religious girl and Salar is not. He is a rich boy with an IQ level above 150. Imama wishes to marry Jalal, but Salar lies to her 
                    that Jalal has married someone else. Imama is saddened and asks Salar to marry her so that her family will not be able to force her. Salar helps her and marries her, but soon after loses contact with her.
                    Imama finds a sanctuary under Sibt-e-Ali and his family. She changes her name and completes her studies and starts working in a pharmaceutical company in Lahore. She hates Salar because he refused to divorce her as he had promised.
                    Salar later travels to New Haven for education, then he works for United Nations for some time before permanently settling in Lahore. Salar finally sees the errors of his ways and changes for good. 
                    Later, the scene shifts near to Kaaba, where Salar and Imama are sitting together worshiping God. Salar realizes that God has given him a blessed woman to be his companion, and vows to protect her.</p>
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