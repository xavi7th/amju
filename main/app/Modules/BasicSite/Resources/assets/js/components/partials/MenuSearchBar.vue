<template>
		<div class="rd-navbar-search">
										<button class="rd-navbar-search-toggle rd-navbar-fixed-element-1"
											data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
										<form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live"
											method="GET">
											<div class="form-wrap">
												<label class="form-label" for="rd-navbar-search-form-input">Search</label>
												<input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input"
													type="text" name="s" autocomplete="off">
												<div class="rd-search-results-live" id="rd-search-results-live"></div>
											</div>
											<button class="rd-search-form-submit mdi mdi-magnify" type="submit"></button>
										</form>
									</div>
</template>
