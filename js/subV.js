function subV(loc, title) {
  const tamplet = `
    <div class="tbx">
        <dl>
            <dt data-aos="fade-up">${loc}</dt>
            <dd data-aos="fade-up">${title}</dd>
        </dl>

        <div class="ob">
            <div class="o3 oo">
                <img src="/img/sub/sv_img03.png" alt="" data-aos="zoom-in">
            </div>
            <div class="o4 oo">
                <img src="/img/sub/sv_img04.png" alt="" data-aos="zoom-in" data-aos-delay="100">
            </div>
            <div class="o1 oo">
                <img src="/img/sub/sv_img01.png" alt="" data-aos="zoom-in" data-aos-delay="200">
            </div>
            <div class="o2 oo">
                <img src="/img/sub/sv_img02.png" alt="" data-aos="zoom-in" data-aos-delay="300">
            </div>
        </div>
    </div>
    `;

  /*
    let ob;

    if(window.location.pathname.split('/')[2] == 'community'){

        ob = `
            <div class="o5 oo">
                <img src="/img/sub/sv_img05.png" alt="" data-aos="zoom-in" data-aos-delay="200">
            </div>
            <div class="o6 oo">
                <img src="/img/sub/sv_img06.png" alt="" data-aos="zoom-in" data-aos-delay="300">
            </div>
        `;

    }else if(window.location.pathname.split('/')[2] == 'about'){
        ob = `
            <div class="o1 oo">
                <img src="/img/sub/sv_img01.png" alt="" data-aos="zoom-in" data-aos-delay="200">
            </div>
            <div class="o2 oo">
                <img src="/img/sub/sv_img02.png" alt="" data-aos="zoom-in" data-aos-delay="300">
            </div>
        `;
    }
    */

  $(".__sv").append(tamplet);

  // $('.__sv .ob').append(ob);
}
