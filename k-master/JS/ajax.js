const rRegistration = async (event) => {
	event.preventDefault();
	const form = document.getElementById('frmRegister');
	let jsonData = {};

	for (const pair of new FormData(form)) {
		jsonData[pair[0]] = pair[1];
	}

	const response = await sendRequest('controller.php', jsonData);
	await setStudentData(response.body);
}

const setStudentData = async (values) => {
	await Promise.all([
		setValuesElementByName('studentName', values.NameStudent),
		setValuesElementByName('studentSurname', values.SurnameStudent),
		setValuesElementByName('studentDocument', values.DocumentStudent),
		setValuesElementByName('studentAge', values.AgeStudent),
		setValuesElementByName('studentGender', values.GenderStudent),
		setValuesElementByName('result', values.Result),
	]);
}

const sendRequest = (action, jsonBody) => {
	const URL = `${document.location}PHP/${action}`;
	return new Promise(async (resolve, reject) => {
		await fetch(URL, {
			method: 'POST',
			headers: {
				'Accept': 'application/json',
				'Content-Type': 'application/json'
			},
			body: JSON.stringify(jsonBody)
		})
			.then(response => response.text().then(data => {
				return ({ status: response.status, body: JSON.parse(data) })
			}
			))
			.then((data) => resolve(data))
			.catch(err => reject(Error(err.message)));
	});
};

const setValuesElementById = async (idElement, value) =>
	document.getElementById(idElement).value = value;

const setValuesElementByName = async (idElement, value) =>
	document.getElementsByName(idElement).forEach(element => element.value = value)