var list = document.getElementsByTagName('input');

for (let item of list) {
    item.addEventListener("input",updateValues)
}
function updateValues()
{
    let x1 = document.getElementById('x1').value;
    let x2 = document.getElementById('x2').value;
    let x3 = document.getElementById('x3').value;

    let y1 = document.getElementById('y1').value;
    let y2 = document.getElementById('y2').value;
    let y3 = document.getElementById('y3').value;

    let z1 = document.getElementById('z1').value;
    let z2 = document.getElementById('z2').value;
    let z3 = document.getElementById('z3').value;

    let b1 = document.getElementById('b1').value;
    let b2 = document.getElementById('b2').value;
    let b3 = document.getElementById('b3').value;

    let D = x1*y2*z3+y1*z2*x3+z1*x2*y3-z1*y2*x3-y1*x2*z3-x1*z2*y3;

    let Dx = b1*y2*z3+y1*z2*b3+z1*b2*y3-z1*y2*b3-y1*b2*z3-b1*z2*y3;
    let Dy = x1*b2*z3+b1*z2*x3+z1*x2*b3-z1*b2*x3-b1*x2*z3-x1*z2*b3;
    let Dz = x1*y2*b3+y1*b2*x3+b1*x2*y3-b1*y2*x3-y1*x2*b3-x1*b2*y3;

    document.getElementById("D").innerText=D;

    document.getElementById("Dx").innerText=Dx;
    document.getElementById("Dy").innerText=Dy;
    document.getElementById("Dz").innerText=Dz;

    let X = Dx/D;
    let Y = Dy/D;
    let Z = Dz/D;

    document.getElementById("X").innerText=X;
    document.getElementById("Y").innerText=Y;
    document.getElementById("Z").innerText=Z;
}