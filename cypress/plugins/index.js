/// <reference types="cypress" />
// ***********************************************************
// This example plugins/index.js can be used to load plugins
//
// You can change the location of this file or turn off loading
// the plugins file with the 'pluginsFile' configuration option.
//
// You can read more here:
// https://on.cypress.io/plugins-guide
// ***********************************************************

// This function is called when a project is opened or re-opened (e.g. due to
// the project's config changing)

/**
 * @type {Cypress.PluginConfig}
 */

const findBrowser = () => {
	// the path is hard-coded for simplicity
	const browserPath =
		'/Program Files/BraveSoftware/Brave-Browser/Application/brave.exe'

		return {
			name: 'Brave',
			channel: 'stable',
			family: 'chromium',
			displayName: 'Brave',
			version: '100.1.37.109',
			path: browserPath,
			majorVersion : '100',
		}
}

module.exports = async (on, config) => {
    // `on` is used to hook into various events Cypress emits
    // `config` is the resolved Cypress config

    // on('task', require('./swap-env'));

		const browser = await findBrowser()
		return {
			browsers: config.browsers.concat(browser),
		}
};
