(function () {
    setInterval(() => {
      calculateHourDegrees();
      calculateMinuteDegrees();
      calculateSeconds();
      calculateLines();
    }, 1000);
  })();

  function linearMap(value, min, max, newMin, newMax) {
    return newMin + ((newMax - newMin) * (value - min)) / (max - min);
  }

  function calculateHourDegrees() {
    const currentHour = new Date().getHours() - 12;
    const angle = linearMap(currentHour, 0, 12, 0, 360);
    document.querySelector(".hours").style.transform = `rotate(${angle}deg)`;
  }
  function calculateMinuteDegrees() {
    const currentMinutes = new Date().getMinutes();
    const angle = linearMap(currentMinutes, 0, 60, 0, 360);
    document.querySelector(".minutes").style.transform = `rotate(${angle}deg)`;
  }
  
  function calculateSeconds() {
    const currentMinutes = new Date().getSeconds();
    const angle = linearMap(currentMinutes, 0, 60, 0, 360);
    document.querySelector(".seconds").style.transform = `rotate(${angle}deg)`;
  }
  function calculateLines() {
    const lines = document.querySelectorAll(".line");
    const numberLines = lines.length;
    for (let i = 0; i < numberLines; i++) {
      const line = lines[i];
      const angle = linearMap(i, 0, numberLines, 0, 360);
      line.style.transform = `rotate(${angle}deg)`;
    }
  }