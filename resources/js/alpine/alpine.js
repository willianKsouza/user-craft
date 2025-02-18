import Alpine from 'alpinejs'
import createUser from './createUser'
window.Alpine = Alpine

Alpine.data('createUser', createUser)
Alpine.start()
