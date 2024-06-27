const container = document.querySelector('.flex-container');
const gapInput = document.getElementById('gapInput');
const growB1Input = document.getElementById('box1');
const growB2Input = document.getElementById('box2');
const growB3Input = document.getElementById('box3');

document.getElementById('resetFlowGrow').addEventListener('click', () => {
    container.style.flexDirection = 'row';
    container.style.justifyContent = 'flex-start';
    container.style.gap = '5px';
    resetGrow();
});

document.getElementById('rowBnt').addEventListener('click', () => {
    container.style.flexDirection = 'row';
   
});

document.getElementById('columnBnt').addEventListener('click', () => {
    container.style.flexDirection = 'column';
   
});

document.getElementById('start').addEventListener('click', () => {
    container.style.justifyContent = 'flex-start';
    
});

document.getElementById('center').addEventListener('click', () => {
    container.style.justifyContent = 'center';
    
});

document.getElementById('end').addEventListener('click', () => {
    container.style.justifyContent = 'flex-end';
    
});

document.getElementById('space-Between').addEventListener('click', () => {
    container.style.justifyContent = 'space-Between';
   
    
});

document.getElementById('space-Around').addEventListener('click', () => {
    container.style.justifyContent = 'space-Around';
    
});

document.getElementById('space-Evenly').addEventListener('click', () => {
    container.style.justifyContent = 'space-Evenly';
    
});

document.getElementById('alignStart').addEventListener('click', () => {
    container.style.alignItems = 'flex-start';
 

});

document.getElementById('alignCenter').addEventListener('click', () => {
    container.style.alignItems = 'center';
    
});

document.getElementById('alignEnd').addEventListener('click', () => {
    container.style.alignItems = 'flex-end';
    
});

document.getElementById('gapBtn').addEventListener('click', () => {
    setGap(gapInput.value);
});

document.getElementById('box1Button').addEventListener('click', () => {
    document.getElementById('item1').style.flexGrow = growB1Input.value;
    
});

document.getElementById('box2Button').addEventListener('click', () => {
    document.getElementById('item2').style.flexGrow = growB2Input.value;
    
});

document.getElementById('box3Button').addEventListener('click', () => {
    document.getElementById('item3').style.flexGrow = growB3Input.value;
   
});

document.getElementById('growAll').addEventListener('click', () => {
    setGrow('1', '1', '1');
    
});

document.getElementById('resetControls').addEventListener('click', () => {
    container.style.flexDirection = 'row';
    container.style.justifyContent = 'flex-start';
    container.style.gap = '5px';
    resetGrow();
    
});

function resetGrow() {
    setGrow('0', '0', '0');
}

function setGrow(b1, b2, b3) {
    document.getElementById('item1').style.flexGrow = b1;
    document.getElementById('item2').style.flexGrow = b2;
    document.getElementById('item3').style.flexGrow = b3;
}

function setGap(g) {
    if (g >= 1) {
        container.style.gap = g + "px";
    } else {
        container.style.gap = "0px";
    }
}

