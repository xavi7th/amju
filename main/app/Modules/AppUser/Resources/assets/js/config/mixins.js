export default {
	beforeRouteLeave( to, from, next ) {
		this.$emit( 'is-leaving' )
		next()
	}
}
