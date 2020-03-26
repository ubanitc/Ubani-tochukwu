<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="./jquery.MultiFile.js"></script>
     
    <title>Document</title>
  </head>
  <body>
    <header>
      <img src="./images/logo.png" alt="Miss Finesse" class="logo" />
      <p class="logo-text">Vote for your Favourite</p>
      <p class="logo-text">Contestant</p>
    </header>

    <div class="form-container">
      <div class="div">
        <img
          src="./images/contestant-1.jpg"
          alt="Contestant 1"
          class="contestant-img"
        />
      </div>
      <div class="form-div green" id="vote-form">
        <p class="vt">VOTE FOR CONTESTANT-05</p>
        <p class="vt vx">Vote Result: 253</p>
        <p class="vt vx vy">Select Number of Votes</p>

        <div class="vote-count " id="vte">
          <button id="plusBtn" onclick="return plusBtnFn()">
            +
          </button>
          <input
            type="text"
            id="numberField"
            value="10"
            class="vote-out"
            onkeyup="return calculateFn()"
            onkeypress="return isNumber(event)"
          />
          <button id="minusBtn" onclick="return minusBtnFn()">
            -
          </button>
          
         
          
          <p class="amt-p">Amount: &#8358<span id="result" name="this">--</span></p> 
        </div>
        <p class="min">Please note that each vote cost ₦50 only.</p>
        <p class="min">And a minimum of 10 votes is required.</p>
        <button id="just" >Next</button>
      </div>
      <div class="form-div blue second-form-div display black" id="king">
        <div class="form-div green" id="vote-form">
          <a href="#vote-form" class="bback">
          <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" width="40px" height="50px" viewBox="0 0 248.322 248.322"
            style="enable-background:new 0 0 248.322 248.322; margin: 0; padding: 0; justify-content: left; align-items: flex-start; float: left; margin: 10px 0 0 10px;" xml:space="preserve">
            <g>
              <path d="M124.161,0C55.589,0,0,55.589,0,124.161s55.589,124.161,124.161,124.161c68.571,0,124.161-55.589,124.161-124.161
              S192.732,0,124.161,0z M221.721,142.335H97.059l53.244,53.244l-28.284,28.284l-99.702-99.702l99.702-99.702l28.284,28.284
              l-53.244,53.244h124.662V142.335z" />
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </svg>
  </a>
          <p class="vt">Mode of Payment</p>
          <p class="vt vx">Vote Result: 253</p>
          <div class="cc">
            
              <a href="#typo" class="clickme" onclick="return thisfn()">
              <div class="box">
                <svg id="Layer_1" enable-background="new 0 0 256 256" height="80" viewBox="0 0 256 256" width="80"
                  xmlns="http://www.w3.org/2000/svg">
                  <g id="Layer_49">
                    <g>
                      <path d="m52.7 127.2h190.1c4.4 0 8 3.6 8 8v110.3c0 4.4-3.6 8-8 8h-190.1c-4.4 0-8-3.6-8-8v-110.3c0-4.4 3.6-8 8-8z"
                        fill="#3caadc" />
                      <path d="m52.7 127.2h190.1c4.4 0 8 3.6 8 8v110.3c0 4.4-3.6 8-8 8h-190.1c-4.4 0-8-3.6-8-8v-110.3c0-4.4 3.6-8 8-8z"
                        fill="#3caadc" />
                      <path d="m44.7 183v62.5c0 4.4 3.6 8 8 8h60.9c-32.8-11.4-58.3-37.5-68.9-70.5z" fill="#9be5f9" />
                      <g fill="#9be5f9">
                        <g>
                          <path d="m107.3 195.1h6.1c1.1 0 2 .9 2 2v6.1c0 1.1-.9 2-2 2h-6.1c-1.1 0-2-.9-2-2v-6.2c0-1.1.9-1.9 2-1.9z" />
                          <path d="m124.2 195.1h6.1c1.1 0 2 .9 2 2v6.1c0 1.1-.9 2-2 2h-6.1c-1.1 0-2-.9-2-2v-6.2c0-1.1.9-1.9 2-1.9z" />
                          <path d="m141.1 195.1h6.1c1.1 0 2 .9 2 2v6.1c0 1.1-.9 2-2 2h-6.1c-1.1 0-2-.9-2-2v-6.2c0-1.1.9-1.9 2-1.9z" />
                          <path d="m158 195.1h6.1c1.1 0 2 .9 2 2v6.1c0 1.1-.9 2-2 2h-6.1c-1.1 0-2-.9-2-2v-6.2c0-1.1.9-1.9 2-1.9z" />
                        </g>
                        <g>
                          <path d="m180.6 195.1h6.1c1.1 0 2 .9 2 2v6.1c0 1.1-.9 2-2 2h-6.1c-1.1 0-2-.9-2-2v-6.2c0-1.1.9-1.9 2-1.9z" />
                          <path d="m197.5 195.1h6.1c1.1 0 2 .9 2 2v6.1c0 1.1-.9 2-2 2h-6.1c-1.1 0-2-.9-2-2v-6.2c0-1.1.9-1.9 2-1.9z" />
                          <path d="m214.4 195.1h6.1c1.1 0 2 .9 2 2v6.1c0 1.1-.9 2-2 2h-6.1c-1.1 0-2-.9-2-2v-6.2c0-1.1.9-1.9 2-1.9z" />
                        </g>
                      </g>
                      <path
                        d="m44.7 135.2c0-4.4 3.6-8 8-8h145.5l33-33c3.1-3.1 3.1-8.2 0-11.3l-78-78c-3.1-3.1-8.2-3.1-11.3 0l-134.4 134.3c-3.1 3.1-3.1 8.2 0 11.3l37.2 37.2z"
                        fill="#edf4fc" />
                      <path d="m52.7 127.2h31l95.9-95.9-16.3-16.3-112.6 112.4c.7-.1 1.4-.2 2-.2z" fill="#5290db" />
                      <path d="m44.7 135.2c0-.7.1-1.3.3-2l-27.4 27.4 16.3 16.4 10.8-10.8z" fill="#5290db" />
                      <path
                        d="m70 143.7h23.5c4.2 0 7.6 3.4 7.6 7.6v23.5c0 4.2-3.4 7.6-7.6 7.6h-23.5c-4.2 0-7.6-3.4-7.6-7.6v-23.5c0-4.2 3.4-7.6 7.6-7.6z"
                        fill="#f5c84c" />
                      <path
                        d="m198.7 229c0-4.1 2.2-8 5.7-10.1-5.6-3.5-12.9-1.7-16.4 3.9s-1.7 12.9 3.9 16.4c3.8 2.4 8.7 2.4 12.5 0-3.6-2.2-5.7-6.1-5.7-10.2z"
                        fill="#fc657e" />
                      <path
                        d="m210.6 217.1c-2.2 0-4.4.6-6.2 1.8 5.6 3.4 7.4 10.8 3.9 16.4-1 1.6-2.3 2.9-3.9 3.9 5.6 3.5 12.9 1.7 16.4-3.9s1.7-12.9-3.9-16.4c-1.9-1.2-4.1-1.8-6.3-1.8z"
                        fill="#f5c84c" />
                      <path d="m210 229c0-4.1-2.1-8-5.7-10.1-5.6 3.4-7.4 10.8-3.9 16.4 1 1.6 2.3 2.9 3.9 3.9 3.6-2.2 5.7-6.1 5.7-10.2z"
                        fill="#fc8c48" />
                      <circle cx="210" cy="34.4" fill="#f5c84c" r="3.1" />
                      <circle cx="29" cy="218.4" fill="#fc657e" r="3.1" />
                      <circle cx="62" cy="62.4" fill="#87d147" r="3.1" />
                      <path
                        d="m28.8 195.3c-4.3-.8-7.8-4.1-8.6-8.5 0-.1-.1-.2-.2-.2s-.1.1-.2.2c-.9 4.3-4.3 7.7-8.6 8.5-.1 0-.2.1-.2.2s.1.1.2.2c4.3.8 7.8 4.1 8.6 8.5 0 .1.1.2.2.2s.1-.1.2-.2c.9-4.3 4.3-7.7 8.6-8.5.1 0 .2-.1.2-.2s-.1-.2-.2-.2z"
                        fill="#f5c84c" />
                      <path
                        d="m199.9 13h-2.1v-2.1c0-1.6-1.3-2.9-2.9-2.9s-2.9 1.3-2.9 2.9v2.1h-2.1c-1.6 0-2.9 1.3-2.9 2.9s1.3 2.9 2.9 2.9h2.1v2.2c0 1.6 1.3 2.9 2.9 2.9s2.9-1.3 2.9-2.9v-2.1h2.1c1.6 0 2.9-1.3 2.9-2.9s-1.3-3-2.9-3z"
                        fill="#70d6f9" />
                      <path
                        d="m5.7 152.4 36.5 36.5v56.6c0 5.8 4.7 10.5 10.5 10.5h190.1c5.8 0 10.5-4.7 10.5-10.5v-110.3c0-5.8-4.7-10.5-10.5-10.5h-38.5l28.7-28.8c4.1-4.1 4.1-10.8 0-14.9-16.2-16.2-61.4-61.4-78-78-4.1-4.1-10.8-4.1-14.9 0l-134.4 134.5c-4.1 4.1-4.1 10.7 0 14.9zm47 98.6c-3 0-5.5-2.5-5.5-5.5v-49.1c11 23.9 30 43.2 53.7 54.6zm-10.5-69.2-4.8-4.8 4.8-4.8zm0-16.7-8.3 8.3-12.8-12.8 21.1-21.1zm206.1-29.9v110.3c0 3-2.5 5.5-5.5 5.5h-128.8c-31.7-11.2-56.4-36.4-66.8-68.4v-47.4c0-3 2.5-5.5 5.5-5.5h190.1c3.1 0 5.5 2.4 5.5 5.5zm-72.2-104-93.4 93.4h-25.7l106.3-106.2zm53.4 61.2-32.3 32.3h-107.5l89.9-89.9 49.8 49.8c2.2 2.1 2.3 5.6.1 7.8zm-220.2 48.6 134.4-134.4c2.2-2.1 5.7-2.1 7.8 0l8.3 8.3-110.4 110.3c-3.2 1.1-5.6 3.5-6.7 6.7l-25.2 25.2-8.3-8.3c-2.1-2.1-2.1-5.6.1-7.8z" />
                      <path
                        d="m171.2 54.2-13.7 13.7c-1 1-1 2.5 0 3.5s2.5 1 3.5 0l13.7-13.7c1-1 1-2.5 0-3.5s-2.5-1.1-3.5 0c0-.1 0-.1 0 0z" />
                      <path
                        d="m103.7 151.3c0-5.6-4.5-10.1-10.1-10.1h-23.6c-5.6 0-10.1 4.5-10.1 10.1v23.5c0 5.6 4.5 10.1 10.1 10.1h23.5c5.6 0 10.1-4.5 10.1-10.1v-23.5zm-19.4 7.6h14.4v8.4h-14.4zm14.4-7.6v2.6h-14.4v-7.7h9.3c2.8 0 5.1 2.3 5.1 5.1zm-28.7-5.1h9.3v14.4h-14.4v-9.3c0-2.8 2.3-5.1 5.1-5.1zm-5.1 28.7v-9.3h14.4v14.4h-9.3c-2.8 0-5.1-2.3-5.1-5.1zm28.6 5.1h-9.3v-7.7h14.4v2.6c.1 2.8-2.2 5.1-5.1 5.1z" />
                      <path
                        d="m134 157.8c0 1.4 1.1 2.5 2.5 2.5h86c1.4 0 2.5-1.1 2.5-2.5s-1.1-2.5-2.5-2.5h-86c-1.4 0-2.5 1.1-2.5 2.5z" />
                      <path d="m222.5 165.9h-86c-1.4 0-2.5 1.1-2.5 2.5s1.1 2.5 2.5 2.5h86c1.4 0 2.5-1.1 2.5-2.5s-1.1-2.5-2.5-2.5z" />
                      <path
                        d="m210.6 214.6c-2.2 0-4.3.5-6.2 1.4-7.2-3.5-15.8-.5-19.3 6.7s-.5 15.8 6.7 19.3c4 1.9 8.6 1.9 12.6 0 7.2 3.5 15.8.4 19.2-6.7 3.5-7.2.4-15.8-6.7-19.2-2-1-4.2-1.5-6.3-1.5zm-6.3 21.4c-3.9-3.4-4.3-9.3-.9-13.2.3-.3.6-.6.9-.9 3.9 3.4 4.3 9.3.9 13.2-.3.4-.6.7-.9.9zm-6.2 2.4c-5.2 0-9.4-4.2-9.4-9.4s4.2-9.4 9.4-9.4c.5 0 1 0 1.5.1-2.2 2.6-3.4 5.9-3.4 9.3 0 5.1 2.4 7.8 3.4 9.3-.5.1-1 .1-1.5.1zm12.5 0c-.5 0-1 0-1.5-.1 4.5-5.4 4.5-13.2 0-18.6.5-.1 1-.1 1.5-.1 5.2 0 9.4 4.2 9.4 9.4s-4.2 9.4-9.4 9.4z" />
                      <path
                        d="m113.4 192.6h-6.1c-2.5 0-4.5 2-4.5 4.5v6.1c0 2.5 2 4.5 4.5 4.5h6.1c2.5 0 4.5-2 4.5-4.5v-6.2c0-2.4-2-4.4-4.5-4.4zm-.5 10h-5.1v-5.1h5.1z" />
                      <path
                        d="m130.3 192.6h-6.1c-2.5 0-4.5 2-4.5 4.5v6.1c0 2.5 2 4.5 4.5 4.5h6.1c2.5 0 4.5-2 4.5-4.5v-6.2c0-2.4-2-4.4-4.5-4.4zm-.5 10h-5.1v-5.1h5.1z" />
                      <path
                        d="m147.2 192.6h-6.1c-2.5 0-4.5 2-4.5 4.5v6.1c0 2.5 2 4.5 4.5 4.5h6.1c2.5 0 4.5-2 4.5-4.5v-6.2c0-2.4-2-4.4-4.5-4.4zm-.5 10h-5.1v-5.1h5.1z" />
                      <path
                        d="m164.1 192.6h-6.1c-2.5 0-4.5 2-4.5 4.5v6.1c0 2.5 2 4.5 4.5 4.5h6.1c2.5 0 4.5-2 4.5-4.5v-6.2c0-2.4-2-4.4-4.5-4.4zm-.5 10h-5.1v-5.1h5.1z" />
                      <path
                        d="m191.2 203.2v-6.2c0-2.5-2-4.5-4.5-4.5h-6.1c-2.5 0-4.5 2-4.5 4.5v6.1c0 2.5 2 4.5 4.5 4.5h6.1c2.5 0 4.5-2 4.5-4.4zm-5-.6h-5.1v-5.1h5.1z" />
                      <path
                        d="m203.6 207.6c2.5 0 4.5-2 4.5-4.5v-6.1c0-2.5-2-4.5-4.5-4.5h-6.1c-2.5 0-4.5 2-4.5 4.5v6.1c0 2.5 2 4.5 4.5 4.5zm-5.6-10h5.1v5.1h-5.1z" />
                      <path
                        d="m220.5 192.6h-6.1c-2.5 0-4.5 2-4.5 4.5v6.1c0 2.5 2 4.5 4.5 4.5h6.1c2.5 0 4.5-2 4.5-4.5v-6.2c0-2.4-2-4.4-4.5-4.4zm-.5 10h-5.1v-5.1h5.1z" />
                    </g>
                  </g>
                </svg>
              <p class="min bin">Pay online</p>
              <p class="min bin ban">With Credit/Debit Card</p>
            </div>
          </a>
             <a href="#bend"class="back" onclick="return spitFn()" >
            <div class="box box-2 red">

              <svg height="80" viewBox="0 0 64 64" width="80" xmlns="http://www.w3.org/2000/svg" class="gee">
                <g id="Bank">
                  <path d="m32 7-23.562 13h47.125z" fill="#f1f2f2" />
                  <path
                    d="m19 28v3h-2v15h2v3h2v4h22v-4h2v-3h2v-15h-2v-3h-1v-4h-24v4zm11 .35v-1.35a2 2 0 0 1 4 0v1.35a5.98 5.98 0 0 1 3.643 3.607 1.512 1.512 0 0 1 -1.405 2.043 1.525 1.525 0 0 1 -1.42-1.031 3.015 3.015 0 0 0 -3.83-1.8 2.921 2.921 0 0 0 -1.819 1.82 3.013 3.013 0 0 0 2.882 4.011 5.459 5.459 0 0 1 4.874 2.392 6.117 6.117 0 0 1 -2.925 9.258v1.35a2 2 0 0 1 -4 0v-1.35a5.98 5.98 0 0 1 -3.643-3.607 1.512 1.512 0 0 1 1.405-2.043 1.525 1.525 0 0 1 1.42 1.031 3.014 3.014 0 0 0 3.791 1.813 2.924 2.924 0 0 0 1.858-1.834 3.012 3.012 0 0 0 -2.882-4.01 5.459 5.459 0 0 1 -4.874-2.392 6.117 6.117 0 0 1 2.925-9.258z"
                    fill="#f1f2f2" />
                  <path
                    d="m60.1 18.5-28.1-15.5-28.095 15.5a1.751 1.751 0 0 0 -.905 1.533 1.75 1.75 0 0 0 2.6 1.532l26.4-14.565 26.405 14.568a1.75 1.75 0 0 0 2.595-1.532 1.751 1.751 0 0 0 -.9-1.536z"
                    fill="#2488ff" />
                  <path d="m20 28v-4h-12v4h1 10z" fill="#9bc9ff" />
                  <path d="m19 31v-3h-10v3h2 6z" fill="#2488ff" />
                  <path d="m21 49h-2-10-2v4h14z" fill="#9bc9ff" />
                  <path d="m19 46h-2-6-2v3h10z" fill="#2488ff" />
                  <path d="m17 31h-6v15h6z" fill="#d1e7f8" />
                  <path d="m59 53h-2-14-22-14-2v4h54z" fill="#57a4ff" />
                  <path d="m5 57h-2v4h58v-4h-2z" fill="#2488ff" />
                  <path
                    d="m31.949 40a3.012 3.012 0 0 1 2.883 4.01 2.924 2.924 0 0 1 -1.858 1.834 3.014 3.014 0 0 1 -3.791-1.813 1.525 1.525 0 0 0 -1.42-1.031 1.512 1.512 0 0 0 -1.405 2.043 5.98 5.98 0 0 0 3.642 3.607v1.35a2 2 0 0 0 4 0v-1.35a6.117 6.117 0 0 0 2.925-9.258 5.459 5.459 0 0 0 -4.874-2.392 3.013 3.013 0 0 1 -2.883-4.011 2.921 2.921 0 0 1 1.819-1.82 3.015 3.015 0 0 1 3.83 1.8 1.525 1.525 0 0 0 1.42 1.031 1.512 1.512 0 0 0 1.405-2.043 5.98 5.98 0 0 0 -3.642-3.607v-1.35a2 2 0 0 0 -4 0v1.35a6.117 6.117 0 0 0 -2.925 9.258 5.459 5.459 0 0 0 4.874 2.392z"
                    fill="#ff9811" />
                  <path d="m45 28h10 1v-4h-12v4z" fill="#9bc9ff" />
                  <path d="m45 31h2 6 2v-3h-10z" fill="#2488ff" />
                  <path d="m43 49v4h14v-4h-2-10z" fill="#9bc9ff" />
                  <path d="m45 46v3h10v-3h-2-6z" fill="#2488ff" />
                  <path d="m47 46h6v-15h-6z" fill="#d1e7f8" />
                  <circle cx="32" cy="14" fill="#57a4ff" r="3" />
                  <path d="m8.438 20-2.438 1.345v2.655h52v-2.655l-2.437-1.345z" fill="#a7a9ac" />
                  <path d="m58 22v-.655l-2.437-1.345h-47.125l-2.438 1.345v.655z" fill="#d1d3d4" />
                  <path d="m5 53h54v2h-54z" fill="#9bc9ff" />
                  <path d="m3 57h58v2h-58z" fill="#57a4ff" />
                  <path
                    d="m61 56h-1v-3a1 1 0 0 0 -1-1h-1v-3a1 1 0 0 0 -1-1h-1v-2a1 1 0 0 0 -1-1h-1v-13h1a1 1 0 0 0 1-1v-2a1 1 0 0 0 1-1v-3h1a1 1 0 0 0 1-1v-1.245a2.713 2.713 0 0 0 3-2.722 2.75 2.75 0 0 0 -1.422-2.408l-28.1-15.5a.994.994 0 0 0 -.966 0l-28.09 15.5a2.755 2.755 0 0 0 1.327 5.165c.084 0 .167-.025.251-.032v1.242a1 1 0 0 0 1 1h1v3a1 1 0 0 0 1 1v2a1 1 0 0 0 1 1h1v13h-1a1 1 0 0 0 -1 1v2h-1a1 1 0 0 0 -1 1v3h-1a1 1 0 0 0 -1 1v3h-1a1 1 0 0 0 -1 1v4a1 1 0 0 0 1 1h58a1 1 0 0 0 1-1v-4a1 1 0 0 0 -1-1zm-26.78-4a2.981 2.981 0 0 0 .78-2v-.681a7.037 7.037 0 0 0 3.593-3.964 7.445 7.445 0 0 0 -.815-6.485 6.483 6.483 0 0 0 -5.744-2.87 1.961 1.961 0 0 1 -1.648-.824 2 2 0 0 1 -.27-1.869 1.922 1.922 0 0 1 1.189-1.19 2 2 0 0 1 2.573 1.2 2.5 2.5 0 1 0 4.7-1.7 6.934 6.934 0 0 0 -3.578-3.938v-.679a2.981 2.981 0 0 0 -.78-2h8.78v3a1 1 0 0 0 1 1v2a1 1 0 0 0 1 1h1v13h-1a1 1 0 0 0 -1 1v2h-1a1 1 0 0 0 -1 1v3zm-13.22-4h-1v-2a1 1 0 0 0 -1-1h-1v-13h1a1 1 0 0 0 1-1v-2a1 1 0 0 0 1-1v-3h8.78a2.981 2.981 0 0 0 -.78 2v.681a7.04 7.04 0 0 0 -3.593 3.964 7.445 7.445 0 0 0 .815 6.485 6.463 6.463 0 0 0 5.744 2.87 1.925 1.925 0 0 1 1.648.824 2 2 0 0 1 .27 1.869 1.927 1.927 0 0 1 -1.217 1.2 2.01 2.01 0 0 1 -2.545-1.207 2.5 2.5 0 1 0 -4.7 1.7 6.934 6.934 0 0 0 3.578 3.935v.679a2.981 2.981 0 0 0 .78 2h-7.78v-3a1 1 0 0 0 -1-1zm7.772-11.642a4.046 4.046 0 0 0 3.296 1.642 4.462 4.462 0 0 1 4.005 1.915 5.493 5.493 0 0 1 .637 4.768 5.008 5.008 0 0 1 -3.039 3.023 1 1 0 0 0 -.671.944v1.35a1 1 0 0 1 -2 0v-1.35a1 1 0 0 0 -.672-.944 5.014 5.014 0 0 1 -3.031-3 .538.538 0 0 1 .062-.494.484.484 0 0 1 .4-.209.534.534 0 0 1 .483.377 4.025 4.025 0 0 0 5.039 2.42 3.9 3.9 0 0 0 2.5-2.468 4.006 4.006 0 0 0 -.553-3.685 4.139 4.139 0 0 0 -3.296-1.647 4.475 4.475 0 0 1 -4-1.915 5.491 5.491 0 0 1 -.637-4.767 5.007 5.007 0 0 1 3.039-3.024 1 1 0 0 0 .666-.944v-1.35a1 1 0 0 1 2 0v1.35a1 1 0 0 0 .672.944 5.014 5.014 0 0 1 3.031 3 .538.538 0 0 1 -.062.494.484.484 0 0 1 -.4.209.532.532 0 0 1 -.482-.376 4.021 4.021 0 0 0 -5.087-2.4 3.9 3.9 0 0 0 -2.448 2.451 4.008 4.008 0 0 0 .548 3.686zm15.228 13.642h12v2h-12zm2-2v-1h8v1zm6-3h-4v-13h4zm2-15h-8v-1h8zm1-3h-10v-2h10zm-48-4v-1.065l1.694-.935h46.611l1.7.935v1.065zm5.319-4 19.681-10.858 19.68 10.858zm-7.95 1.682a.741.741 0 0 1 -.369-.649.749.749 0 0 1 .388-.657l27.612-15.234 27.612 15.235a.748.748 0 0 1 .388.659.749.749 0 0 1 -1.112.656l-26.405-14.567a1 1 0 0 0 -.966 0l-26.405 14.567a.74.74 0 0 1 -.743-.01zm14.631 4.318v2h-10v-2zm-1 4v1h-8v-1zm-6 3h4v13h-4zm-2 15h8v1h-8zm-2 3h12v2h-12zm-2 4h52v2h-52zm54 6h-56v-2h56z" />
                  <path d="m14 33a1 1 0 0 0 -1 1v9a1 1 0 0 0 2 0v-9a1 1 0 0 0 -1-1z" />
                  <path d="m50 44a1 1 0 0 0 1-1v-9a1 1 0 0 0 -2 0v9a1 1 0 0 0 1 1z" />
                  <path d="m28 14a4 4 0 1 0 4-4 4 4 0 0 0 -4 4zm6 0a2 2 0 1 1 -2-2 2 2 0 0 1 2 2z" />
                </g>
              </svg>
              <p class="min bin">Pay with Bank</p>
              <p class="min bin">Transfer/Deposit</p>
            
            </div>
          </a>
          </div>
          </div>
          
      </div>
      <div class="form-div bend display" id="bend" >
        <a href="#king" class="bbback">
          
          <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" width="40px" height="50px" viewBox="0 0 248.322 248.322"
            style="enable-background:new 0 0 248.322 248.322; margin: 0; padding: 0; justify-content: left; align-items: flex-start; float: left; margin: 10px 0 0 10px;"
            xml:space="preserve">
            <g>
              <path d="M124.161,0C55.589,0,0,55.589,0,124.161s55.589,124.161,124.161,124.161c68.571,0,124.161-55.589,124.161-124.161
                      S192.732,0,124.161,0z M221.721,142.335H97.059l53.244,53.244l-28.284,28.284l-99.702-99.702l99.702-99.702l28.284,28.284
                      l-53.244,53.244h124.662V142.335z" />
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </svg>
        </a>
        <p class="vt">Make Payment</p>
        <p class="vt vx">Vote Result: 253</p>
        <p class="gimp">Make a payment of &#8358<span id="result1">--</span> into the account below</p>
        <table>
          
          <tr>
            <td class="left">Bank Name</td>
            <td class="right">Guaranty Trust Bank</td>
            
          </tr>
          <tr>
            <td class="left mid4">Account Name</td>
            <td class="right mid4">Ubani Tochukwu</td>
            
          </tr>
          <tr>
            <td class="left">Account Number</td>
            <td class="right">0223644381</td>
            
          </tr>
          <tr>
          </table>
          <button class="justice">Next</button>
      </div>
      <div class="form-div god display" id="vote-form4">
        <a href="#bend" class="bbbback">
          
          <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" width="40px" height="50px" viewBox="0 0 248.322 248.322"
            style="enable-background:new 0 0 248.322 248.322; margin: 0; padding: 0; justify-content: left; align-items: flex-start; float: left; margin: 10px 0 0 10px;"
            xml:space="preserve">
            <g>
              <path d="M124.161,0C55.589,0,0,55.589,0,124.161s55.589,124.161,124.161,124.161c68.571,0,124.161-55.589,124.161-124.161
                      S192.732,0,124.161,0z M221.721,142.335H97.059l53.244,53.244l-28.284,28.284l-99.702-99.702l99.702-99.702l28.284,28.284
                      l-53.244,53.244h124.662V142.335z" />
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </svg>
        </a>
        <p class="vt">Payment Details</p>
        <p class="vt vx">Vote Result: 253</p>
        <p class="gimp">Fill in depositor's account details of the account. or bank deposit slip details for confirmation.</p>
        <div>
          <form action="Post">
            <input type="file" 2 multiple 3 class="upload" value="CLick to Upload Proof of Payment" required/>
            <p class="mado">*Upload Proof of Payment</p>
            <input type="text" placeholder="Bank Name" required class="bank-name">
            <p class="mado">*This field is Required</p>
            
              <input type="text" placeholder="Account Name" required class="account-name">
            
            
              <input type="text" placeholder="Account Number" required class="account-number">
              <p class=" mado yes chai">*This field is Required</p>
              <p class="mado yes bros">*This field is Required</p>
            
          </form>
        </div>
      </div>
        <div class="form-div payment display" id="typo">
        <a href="#king" class="paymentback">
          <xml version="1.0" encoding="iso-8859-1">
          <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" width="40px" height="50px" viewBox="0 0 248.322 248.322"
            style="enable-background:new 0 0 248.322 248.322; margin: 0; padding: 0; justify-content: left; align-items: flex-start; float: left; margin: 10px 0 0 10px;"
            xml:space="preserve">
            <g>
              <path d="M124.161,0C55.589,0,0,55.589,0,124.161s55.589,124.161,124.161,124.161c68.571,0,124.161-55.589,124.161-124.161
                      S192.732,0,124.161,0z M221.721,142.335H97.059l53.244,53.244l-28.284,28.284l-99.702-99.702l99.702-99.702l28.284,28.284
                      l-53.244,53.244h124.662V142.335z" />
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </svg>
        </a>
        <form action="initialize.php" method="post">
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="Name">
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="Email">
          <input type="number" name="amountpaid" readonly class="rage">
          
          <button type="submit" name="donate">Submit</button>
        </form>
          
      </div>
    </div>
    <!-- <div class="container">
      <div class="green" id="green"></div>
      <input
        type="button"
        value="Next"
        name="buttton-1"
        placeholder="green"
        id="front"
        class="next-btn"
      />

      <div class="blue display"></div>
      <input
        type="button"
        value="Previous"
        name="buttton-2"
        placeholder="blue"
        id="back"
        class="next-btn"
      />
    </div> -->
       
    <script>
      let numberField = document.querySelector("#numberField");
      let result = document.querySelector("#result");
      let result1 = document.querySelector("#result1")
      let results = document.querySelector(".rage")
      

      result.innerText = numberField.value * 50;
      results.value = result.innerText;


      plusBtnFn = () => {
        //parseint is used here cuz the plus sign in JS is for concatenation, without parseint it will treat the operand as a string and concatenate it with 1, thats not what we want.
        numberField.value = parseInt(numberField.value) + 1;
        result.innerText = numberField.value * 50;
      };

      minusBtnFn = () => {
        numberField.value -= 1;
        result.innerText = numberField.value * 50;
      };

      calculateFn = () => {
        result.innerText = numberField.value * 50;
      };
      spitFn = () =>{
        result1.innerText = result.innerText;
      };

      thisfn = () =>{
        results.value = result.innerText;
      };
      
    </script>
    <script>let btnshow = document.getElementById("just");
      let input = document.getElementById("numberField");

      input.addEventListener("keyup", () => {
        if (input.value.length < 2) btnshow.disabled = true;
        else btnshow.disabled = false;
      });</script>
    <script>
      function isNumber(evt) {
          evt = (evt) ? evt : window.event;
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
          }
          return true;
        }

    </script>
    

    <script src="./script.js"></script>
  </body>
</html>
