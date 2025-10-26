function autoCalculate() {
  const basicInput = document.getElementById("basic");
  const hraInput = document.getElementById("hra");
  const daInput = document.getElementById("da");
  const grossInput = document.getElementById("gross");

  const basic = parseFloat(basicInput.value);

  if (!isNaN(basic) && basic > 0) {
    const hra = basic * 0.2;
    const da = basic * 0.1;
    const gross = basic + hra + da;

    hraInput.value = hra.toFixed(2);
    daInput.value = da.toFixed(2);
    grossInput.value = gross.toFixed(2);
  } else {
    hraInput.value = "";
    daInput.value = "";
    grossInput.value = "";
  }
}
