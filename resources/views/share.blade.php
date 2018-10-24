<div class="point">
    <h2>Share</h2>
    <div class="content">
        <p>
            What kind of millennial would you be if you didn’t share this on social media? Try our handy
            Profile Photo Maker Machine™ to let your friends know you’re going to SGFing Vote.
        </p>

        <form action="/sgfing-image" method="POST" enctype="multipart/form-data" class="upload">
            {{ csrf_field() }}
            <label class="file_upload">
                Upload Selfie
                <input type="file" name="photo" id="photo" accept=".png,.jpg,.jpeg,.gif" class="button">
            </label>
            <button type="submit" class="sgfing_sexy disabled" disabled>Make It Sexy</button>
        </form>

        <div class="examples">
            <p>
                Examples <br>
                <img src="/images/sarah.jpg" alt="Sarah Jenkins">
                <img src="/images/brad.jpg" alt="Brad Hill">
                <img src="/images/myke.jpeg" alt="Myke Bates">
                <img src="/images/dave.jpg" alt="Dave Rowett">
                <img src="/images/wesley.jpg" alt="Wesley Noble">
                <img src="/images/josh.jpeg" alt="Josh Sullivan">
                <img src="/images/abby.jpeg" alt="Abby Gust">
                <img src="/images/jason.jpeg" alt="Jason Arend">
            </p>
        </div>
    </div>
</div>