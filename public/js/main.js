let shoes = document.querySelectorAll('.fromBd');
let imgsContainer = document.querySelector('.stockContainer');
let img1 = 
`
    <img src="/image/${shoes[0].innerHTML}.jpg" alt="">
`;
let img2 = 
`
    <img src="/image/${shoes[1].innerHTML}.jpg" alt="">
`;
let img3 = 
`
    <img src="/image/${shoes[2].innerHTML}.jpg" alt="">
`;

imgsContainer.innerHTML = img1;
imgsContainer.innerHTML += img2;
imgsContainer.innerHTML += img3;
