//
// $(document).ready(function () {
//     $('.arrows').click(function (event) {
//         $('body, html').animate({
//             scrollTop: $(".search").offset().top
//         }, 600);
//
//     });
//     $('a[href*="#"]').bind('click', function (e) {
//         e.preventDefault(); // prevent hard jump, the default behavior
//
//         var target = $(this).attr("href"); // Set the target as variable
//
//         // perform animated scrolling by getting top-position of target-element and set it as scroll target
//         $('html, body').stop().animate({
//             scrollTop: $(target).offset().top
//         }, 1400, function () {
//             location.hash = target; //attach the hash (#jumptarget) to the pageurl
//         });
//
//         return false;
//     });
// });
//
// const cities = ['Kraków', 'Gliwice', 'Rzeszów'];
// const categories = ['B1', 'B2', 'B3', 'B6'];
//
// for (let i = 0; i < cities.length; i++) {
//     const c = /*html*/ `
//         <option value=${cities[i]}>${cities[i]}</option>
//     `
//     $("#city").append(c);
// }
// for (let i = 0; i < categories.length; i++) {
//     const ca = /*html*/ `
//         <option value=${categories[i]}>${categories[i]}</option>
//     `
//     $("#category").append(ca);
// }
//
// $.getJSON("js/data.json", function (os) {
//
//
//
//
//     let counter = 0;
//     let active = 1;
//
//     if (Number(sessionStorage.getItem('active') > active)) {
//         active = Number(sessionStorage.getItem('active'));
//     }
//     let city = sessionStorage.getItem('city') ? sessionStorage.getItem('city') : null;
//     let category = sessionStorage.getItem('category') ? sessionStorage.getItem('category') : null;
//     console.log(city, category)
//     let price = null;
//     let star = null;
//     let list = [];
//     let sortVar = sessionStorage.getItem('sortVar') ? Number(sessionStorage.getItem('sortVar')) : 's';
//
//     $("#starPrice option[value=" + sortVar + "]").attr('selected', 'selected');
//     $("#city option[value=" + city + "]").attr('selected', 'selected');
//     $("#category option[value=" + category + "]").attr('selected', 'selected');
//
//     for (let key in os) {
//         os[key].category = os[key].category.split(" ")
//         list.push(os[key]);
//     }
//
//
//     for (let i = 0; i < list.length; i++) {
//         list[i].rating = (list[i].rating1 + list[i].rating2 + list[i].rating3 + list[i].rating4 + list[i].rating5) / 5;
//         list[i].visible = true;
//         list[i].shortDescription = list[i].description;
//         if (list[i].shortDescription.length > 80) {
//             list[i].shortDescription = list[i].description.slice(0, 80) + '...';
//         }
//
//     }
//
//
//
//
//
//     activeHandle = (e) => {
//         active = e;
//         sessionStorage.setItem('active', active);
//         trig();
//     }
//
//     activeC = (e) => {
//         if (active >= 1 && active < Math.ceil(counter / 3) && e === 1) {
//             active += e;
//             sessionStorage.setItem('active', active);
//             trig();
//         } else if (e === -1 && active > 1) {
//             active += e;
//             sessionStorage.setItem('active', active);
//             trig();
//         }
//
//     }
//
//     starPrice = (e, g) => {
//         active = g ? 1 : Number(sessionStorage.getItem('active'));
//         sortVar = e;
//         sessionStorage.setItem('sortVar', sortVar);
//         if (e == 1 || e == 3) {
//             price = true;
//             star = false;
//         } else if (e == 0 || e == 2) {
//             star = true;
//             price = false;
//         } else {
//             star = false;
//             price = false;
//         }
//
//         sortStarPrice();
//     }
//
//
//     changeSort = (e) => {
//         active = e ? 1 : Number(sessionStorage.getItem('active'));
//         if ($(".select1 option:selected").text() !== "miasto") {
//             city = $(".select1 option:selected").text();
//             sessionStorage.setItem('city', city);
//         } else {
//             city = null;
//             sessionStorage.setItem('city', '1');
//         }
//
//         if ($(".select2 option:selected").text() !== "kategoria kursu") {
//             category = $(".select2 option:selected").text();
//             sessionStorage.setItem('category', category);
//         } else {
//             category = null;
//             sessionStorage.setItem('category', '1');
//         }
//
//         function findCategory(x) {
//             return x === category;
//         }
//
//         for (let i = 0; i < list.length; i++) {
//             if (city !== null && category !== null) {
//                 if (list[i].city === city && list[i].category.find(findCategory)) {
//                     list[i].visible = true;
//                 } else {
//                     list[i].visible = false;
//                 }
//             } else if (category !== null) {
//                 if (list[i].category.find(findCategory)) {
//                     list[i].visible = true;
//                 } else {
//                     list[i].visible = false;
//                 }
//             } else if (city !== null) {
//                 if (list[i].city !== city) {
//                     list[i].visible = false;
//                 } else {
//                     list[i].visible = true;
//                 }
//             } else {
//                 list[i].visible = true;
//             }
//
//         }
//         vis();
//     }
//     changeSort(false);
//
//
//
//     sortStarPrice = () => {
//
//         if (star) {
//             if (sortVar == 0) {
//                 list.sort((a, b) => (a.rating < b.rating) ? 1 : -1);
//             } else {
//                 list.sort((a, b) => (a.rating < b.rating) ? -1 : 1);
//             }
//         } else if (price) {
//             if (sortVar == 1) {
//                 list.sort((a, b) => (Number(a.price) < Number(b.price)) ? -1 : 1);
//             } else {
//                 list.sort((a, b) => (Number(a.price) < Number(b.price)) ? 1 : -1);
//             }
//         }
//         vis();
//
//     }
//
//     starPrice(sortVar, false);
//
//     storeToLocal = (id) => {
//         sessionStorage.setItem('item', JSON.stringify(list[id]));
//     }
//
//
//
//     function vis() {
//         markups = [];
//         markupsMob = [];
//         counter = 0;
//
//         for (let i = 0; i < list.length; i++) {
//             if (list[i].visible !== false) {
//                 const markup = [/*html*/`
//                         <div class="image d-flex align-items-center justify-content-center">
//                             <img src="img/${list[i].img}">
//                         </div>
//                         <div class="item-content w-50 c-back ml-2 ml-xl-5 py-4 d-flex flex-column justify-content-between">
//                             <h4 class="c-red">Ośrodek ${list[i].name}</h4>
//                             <div class="descripton-short my-2">
//                                 <p>${list[i].shortDescription}
//                                 </p>
//                             </div>
//                             <div class="d-block d-xl-flex">
//                                 <p>ocena: <b>${list[i].rating}</b></p>
//                                 <p class="ml-0 ml-xl-5">cena: <b>${list[i].price} zł</b></p>
//                             </div>
//                         </div>
//                         <div class="category d-flex flex-column justify-content-between my-4 px-3" style="border-left: 2px solid black">
//                             <div>
//                                 <p><b>${list[i].category}</b></p>
//                                 <p class="mt-2 mb-0">${list[i].street}</p>
//                                 <p><b>${list[i].city}</b></p>
//                             </div>
//                             <div class="button">
//                                 <a id=${i} class="btn btn-primary" href="kurs.php?id=${list[i].id}&r=${list[i].rating}" onclick="storeToLocal(${i})">szczegóły</a>
//                             </div>
//                         </div>
//
//                     `]
//                 const markupM = [/*html*/`
//                     <div class="wrap p-2">
//                         <div class="d-flex flex-wrap">
//                             <div class="image w-50">
//                                 <img src="img/${list[i].img}">
//                             </div>
//                             <div class="des c-back w-50 pt-2">
//                                 <h4 class="c-red">Ośrodek ${list[i].name}</h4>
//                                 <p><b>${list[i].category}</b></p>
//                                 <p>ocena: <b>${list[i].rating}</b></p>
//                                 <p class="ml-0 ml-xl-5">cena: <b>${list[i].price} zł</b></p>
//                             </div>
//                             <div class="w-100 c-back py-3">
//                                 <div class="descripton-short my-2">
//                                     <p> ${list[i].shortDescription} </p>
//                                 </div>
//                             </div>
//                             <div class="w-100 c-back d-flex justify-content-between">
//                                 <div class="address">
//                                     <p class="mt-2 mb-0">${list[i].street}</p>
//                                     <p><b>${list[i].city}</b></p>
//                                 </div>
//                                 <a id=${i} class="btn btn-primary align-self-end" href="kurs.php?id=${list[i].id}&r=${list[i].rating}" onclick="storeToLocal(${i})">szczegóły</a>
//                             </div>
//                         </div>
//                     </div>
//                 `]
//
//                 markups.push(markup);
//                 markupsMob.push(markupM);
//                 counter++;
//             }
//
//         }
//
//
//         d();
//     }
//
//     function d() {
//         markupsD = [];
//         markupsM = [];
//         let c = document.getElementById('numerki');
//         c.innerHTML = "";
//         for (var i = 0; i < Math.ceil(counter / 3); i++) {
//             markupsD[i] = new Array();
//             markupsM[i] = new Array();
//         }
//
//         for (let i = 1; i <= Math.ceil(counter / 3); i++) {
//             for (let j = (i - 1) * 3, a = 0; j < i * 3; j++ , a++) {
//                 if (markups[j]) {
//                     markupsD[i - 1][a] = markups[j];
//                     markupsM[i - 1][a] = markupsMob[j];
//                 }
//
//             };
//
//             const buttons = /*html*/ `
//             <button onclick='activeHandle(${i})' class="btn-mine" id=${i}>${i}</button>
//         `
//
//             c.innerHTML += buttons;
//         }
//
//         trig();
//     }
//
//     function trig() {
//         const b = document.getElementsByClassName('btn-mine');
//         for (let i = 0; i < b.length; i++) {
//             $(b[i]).removeClass('active');
//         }
//         $(b[active - 1]).addClass('active');
//         const list = document.getElementById('search-list');
//         const listMobile = document.getElementById('search-list-mobile');
//         list.innerHTML = '';
//         listMobile.innerHTML = '';
//         if (markupsD[0]) {
//             if (active > b.length || active <= 0) {
//                 active = 1;
//             }
//             console.log(active, sessionStorage.getItem('active'))
//             for (let j = 0; j < markupsD[active - 1].length; j++) {
//                 const el = document.createElement('div');
//                 const elMob = document.createElement('div');
//                 el.className = "search-item d-flex position-relative p-0";
//                 elMob.className = "search-item d-flex position-relative p-0";
//                 el.innerHTML += markupsD[active - 1][j];
//                 elMob.innerHTML += markupsM[active - 1][j];
//
//
//                 list.appendChild(el);
//                 listMobile.appendChild(elMob);
//             }
//         }
//
//     }
//
//     trig();
// });