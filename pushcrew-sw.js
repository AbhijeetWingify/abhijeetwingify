let pushcrewScript = '';

const Engage = () => {
  if (typeof window !== 'undefined') {
    const lhostname = window.location.hostname;

    if (lhostname === 'www.seeking.com' || lhostname === 'staging.seeking.com') {
      pushcrewScript = 'https://cdn.pushcrew.com/sw/083ee782d50bc0ccef46956552b877a6.js';
    } else {
      pushcrewScript = 'https://cdn.pushcrew.com/sw/67b0429be02ca5e26453ea995c008e19.js';
    }

    // eslint-disable-next-line no-unused-vars
    const version = 6;
    importScripts(pushcrewScript);
  }
};

const pushcrewInterval = setInterval(Engage, 300);

if (pushcrewScript !== '') {
  clearInterval(pushcrewInterval);
}
