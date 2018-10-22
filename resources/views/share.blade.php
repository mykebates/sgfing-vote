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
                <img src="/images/sarah.jpeg" alt="SGFing Photo">
                <img src="/images/brad.jpeg" alt="SGFing Photo">
                <img src="/images/myke.jpg" alt="SGFing Photo">
                <img src="/images/sgfing_dave.jpeg" alt="SGFing Photo">
                <img src="/images/sgfing_wesley.jpeg" alt="SGFing Photo">
            </p>
        </div>
    </div>
</div>