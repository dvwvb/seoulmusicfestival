const smf = {
  init: function () {
    this.vi.init();
    this.s3.init();
    this.s4.init();
    this.s5.init();
    this.s6.init();
  },
  vi: {
    init: function () {
      this.anima();
    },
    anima: function () {
      let f, t;

      t = gsap.timeline();

      gsap.set(".s01 .ff", { scale: 0 });
      gsap.set(".s01 .b_03", { yPercent: 100 });
      gsap.set(".s01 .b_01", { scale: 0 });
      gsap.set(".s01 .b_02", { scale: 0 });
      gsap.set(".__main .s01 .tbx .im", { y: 40, opacity: 0 });
      gsap.set(".__main .s01 .tbx p", { y: 40, opacity: 0 });
      gsap.set(".__main .s01 .tbx h2", { y: 40, opacity: 0 });

      t.to(".s01 .b_03", {
        yPercent: 0,
        transformOrigin: "bottom center",
        duration: 0.6,
        delay: 0.3,
      })
        .to(".s01 .b_02", {
          scale: 1,
          transformOrigin: "bottom center",
          duration: 0.6,
        })
        .to(".s01 .b_01", {
          scale: 1,
          transformOrigin: "bottom center",
          duration: 0.6,
        })
        .to(
          ".s01 .tbx .im",
          {
            y: 0,
            opacity: 1,
            duration: 0.6,
          },
          "mylabel"
        )
        .to(
          ".s01 .tbx p",
          {
            y: 0,
            opacity: 1,
            duration: 0.6,
          },
          "mylabel+=.2"
        )
        .to(
          ".s01 .tbx h2",
          {
            y: 0,
            opacity: 1,
            duration: 0.6,
          },
          "mylabel+=.4"
        );

      f = gsap.timeline({
        delay: t.duration(),
        // yoyo : true,
        repeat: -1,
        repeatDelay: 3,
      });

      f.to(".s01 .firework .f_01", {
        scale: 1,
        duration: 0.6,
      })
        .to(".s01 .firework .f_03", {
          scale: 1,
          duration: 0.6,
        })
        .to(".s01 .firework .f_02", {
          scale: 1,
          duration: 0.6,
        })
        .to(".s01 .firework .f_04", {
          scale: 1,
          duration: 0.6,
        })
        .to(
          ".s01 .firework .f_01",
          {
            scale: 0,
            duration: 0.6,
            delay: 3,
          },
          "mylabel"
        )
        .to(
          ".s01 .firework .f_03",
          {
            scale: 0,
            duration: 0.6,
            delay: 3,
          },
          "mylabel"
        )
        .to(
          ".s01 .firework .f_02",
          {
            scale: 0,
            duration: 0.6,
            delay: 3,
          },
          "mylabel"
        )
        .to(
          ".s01 .firework .f_04",
          {
            scale: 0,
            duration: 0.6,
            delay: 3,
          },
          "mylabel"
        );
    },
  },
  s3: {
    init: function () {
      this.slide();
      this.anima();
    },
    slide: function () {
      // pc

      let pcArray = {
        title: ["STAGE", "MUSIC", "BEAUTY"],
        dd: [
          `다양한 취향을 저격할<br>다채로운 장르의 메인 공연`,
          `K-MUSIC 및 대중문화의<br>모든 것을 경험하는 프로그램`,
          `메이크업·패션 트렌드 등<br>K-뷰티를 경험하는 프로그램`,
        ],
        li: [
          [
            "Beautiful Stage",
            "Soulful Stage",
            "Powerful Stage",
            "Wonderful Stage",
          ],
          ["SMUF Talk - 뮤직", "SMUF 버스킹", "K-Culture 체험 Zone"],
          [
            "SMUF Talk - 뷰티",
            "SMUF Beauty Zone",
            "SMUF x 크리에이터 라이브 방송",
          ],
        ],
      };

      if (
        window.location.pathname == "/eng" ||
        window.location.pathname == "/eng/"
      ) {
        pcArray = {
          title: ["STAGE", "MUSIC", "BEAUTY"],
          dd: [
            `Main performances of various genres that will cater to<br> audiences of various musical tastes`,
            `A program where you can experience K-MUSIC and pop culture`,
            `A program where you can experience K-beauty such as<br>Korean makeup and fashion trends`,
          ],
          li: [
            [
              "Beautiful Stage",
              "Soulful Stage",
              "Powerful Stage",
              "Wonderful Stage",
            ],
            ["SMUF Talk - Music", "SMUF Busking", "K-culture Experience"],
            [
              "SMUF Talk - Beauty",
              "SMUF Beauty Zone",
              "SMUF x Creator Live Streaming",
            ],
          ],
        };
      }

      function setTempleat(a) {
        let pcTempleat = `
                    <dl>
                        <dt data-aos="fade-up" data-aos-anchor=".s03 .flx">
                            <span>SMUF 2022</span>
                            ${pcArray.title[a.realIndex]}
                        </dt>
                        <dd data-aos="fade-up" data-aos-delay="100" data-aos-anchor=".s03 .flx">
                            ${pcArray.dd[a.realIndex]}
                        </dd>
                    </dl>
                    <ul data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".s03 .flx">
                    </ul>
                `;

        $(".__main .s03 .f").html("");

        $(".__main .s03 .f").append(pcTempleat);

        pcArray.li[a.realIndex].forEach(function (item, idx) {
          let li = `<li>${item}</li>`;
          $(".__main .s03 .f ul").append(li);
        });
      }

      new Swiper(".__main .s03 .flx .s", {
        slidesPerView: 1.15,
        speed: 500,
        loop: true,
        navigation: {
          nextEl: ".__main .s03 .r",
          prevEl: ".__main .s03 .l",
        },
        breakpoints: {
          1501: {
            slidesPerView: 1.35,
          },
          1281: {
            slidesPerView: 1.25,
          },
        },
        on: {
          init: function (swiper) {
            setTempleat(swiper);
          },
          slideChange: function (swiper) {
            setTempleat(swiper);
          },
        },
      });

      // mob

      function mobTempleat(a) {
        const tem = [
          `<span>SMUF 2022</span>
                    STAGE`,
          `<span>SMUF 2022</span>
                    MUSIC`,
          `<span>SMUF 2022</span>
                    BEAUTY`,
        ];

        $(".__main .s03 .ms h2").html(tem[a.realIndex]);
      }

      new Swiper(".__main .s03 .ms .ss .s", {
        slidesPerView: 1,
        speed: 500,
        effect: "fade",
        fadeEffect: {
          crossFade: true,
        },
        loop: true,
        navigation: {
          nextEl: ".__main .s03 .ms .ra",
          prevEl: ".__main .s03 .ms .la",
        },
        on: {
          init: function (swiper) {
            mobTempleat(swiper);
          },
          slideChange: function (swiper) {
            mobTempleat(swiper);
          },
        },
      });
    },
    anima: function () {
      gsap.fromTo(
        ".__main .s02 .b .b-01 img",
        { yPercent: 5 },
        {
          yPercent: 0,
          yoyo: true,
          repeat: -1,
          ease: "Power1.easeInOut",
          duration: 3,
        }
      );
      gsap.fromTo(
        ".__main .s02 .b .b-02 img",
        { yPercent: 5 },
        {
          yPercent: 0,
          yoyo: true,
          repeat: -1,
          ease: "Power1.easeInOut",
          duration: 2,
        }
      );
    },
  },
  s4: {
    init: function () {
      this.slide();
      this.anima();
    },
    slide: function () {
      new Swiper(".__main .s04 .s", {
        centeredSlides: true,
        slidesPerView: 2.5,
        speed: 500,
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
        effect: "coverflow",
        coverflowEffect: {
          rotate: 0,
          slideShadows: false,
          depth: 200,
        },
      });
    },
    anima: function () {
      gsap.fromTo(
        ".__main .s04 .o .o_1",
        { rotate: -5 },
        {
          rotate: 10,
          repeat: -1,
          yoyo: true,
          ease: "Power2.easeInOut",
          duration: 1,
        }
      );
      gsap.fromTo(
        ".__main .s04 .o .o_2",
        { rotate: -5 },
        {
          rotate: 10,
          repeat: -1,
          yoyo: true,
          ease: "Power2.easeInOut",
          duration: 1,
        }
      );

      gsap.fromTo(
        ".__main .s04 .o .o_3",
        { scale: 0.98 },
        {
          scale: 1.025,
          repeat: -1,
          yoyo: true,
          ease: "Back.easeInOut.config(1.7)",
          duration: 1,
        }
      );
      gsap.fromTo(
        ".__main .s04 .o .o_4",
        { scale: 0.98 },
        {
          scale: 1.025,
          repeat: -1,
          yoyo: true,
          ease: "Back.easeInOut.config(1.7)",
          duration: 1,
        }
      );
    },
  },
  s5: {
    init: function () {
      this.anima();
    },
    anima: function () {
      gsap.fromTo(
        ".__main .s05 .o",
        { scaleY: 0.98 },
        {
          scaleY: 1,
          repeat: -1,
          yoyo: true,
          ease: "Back.easeInOut.config(1.7)",
          transformOrigin: "bottom bottom",
          duration: 1,
        }
      );
    },
  },
  s6: {
    init: function () {
      this.slide();
      this.anima();
    },
    slide: function () {
      new Swiper(".__main .s06 .s", {
        slidesPerView: 1,
        spaceBetween: 20,
        speed: 500,
        navigation: {
          lockClass: "none",
          nextEl: ".__main .s06 .r",
          prevEl: ".__main .s06 .l",
        },
        breakpoints: {
          769: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          481: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
        },
      });
    },
    anima: function () {
      gsap.fromTo(
        ".__main .s06 .o",
        { yPercent: 5 },
        {
          yPercent: 0,
          yoyo: true,
          repeat: -1,
          ease: "Power1.easeInOut",
          duration: 2,
        }
      );
    },
  },
};
