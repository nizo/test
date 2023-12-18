function getPreviouslyRecordedTimeOfCurrentPage(page = window.location.pathname) {

	// if(typeof page === 'undefined') page = window.location.pathname;

	let sessionData = JSON.parse(sessionStorage.getItem('pageInteractions')) || [];

	if(sessionData.length > 0 && comparePathnames(sessionData[sessionData.length - 1].page, page)) {
		return sessionData[sessionData.length - 1].time;
	} else {
		return 0;
	}

}

function comparePathnames(page1, page2) {

	// Add Trailingslash for comparison
	page1 = page1.replace(/\/?$/, '/');
	page2 = page2.replace(/\/?$/, '/');
	return page1 === page2;
}


function updateSessionStorage(page = window.location.pathname, previouslyRecordedTime = 0, interactionTime) {
    let sessionData = JSON.parse(sessionStorage.getItem('pageInteractions')) || [];
	
	if(sessionData.length === 0) {

		sessionData.push({ page, time: 1000 + interactionTime });

	} else {

		let lastPageIndex = sessionData.length - 1;

		if(comparePathnames(sessionData[lastPageIndex].page, page)) {
			sessionData[lastPageIndex].time = previouslyRecordedTime + interactionTime;
		} else {
			sessionData.push({ page, time: interactionTime });
		}

	}	

    sessionStorage.setItem('pageInteractions', JSON.stringify(sessionData));
}


function getInteractionTimeText() {
	const sessionData = JSON.parse(sessionStorage.getItem('pageInteractions')) || [];
	return sessionData.length > 0 ? sessionData.map(entry => `Seite: ${entry.page} (${Number(entry.time / 1000).toFixed(2)} s)`).join('\n') : null;
}


const browserInteractionTime = new BrowserInteractionTime({
    idleTimeoutMs: 7000,
    checkCallbacksIntervalMs: 1000
});


browserInteractionTime.startTimer((interactionTime) => {
	window.previouslyRecordedTime = getPreviouslyRecordedTimeOfCurrentPage();
});



browserInteractionTime.addTimeIntervalEllapsedCallback({
	multiplier: time => time * 1,
	timeInMilliseconds: 1000,
	callback: (interactionTime) => {
		updateSessionStorage(window.location.pathname, window.previouslyRecordedTime, interactionTime);
	}
});


