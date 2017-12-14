#!/bin/bash

# ============= FUTURE YUNOHOST HELPER =============
# Delete a file checksum from the app settings
#
# $app should be defined when calling this helper
#
# usage: ynh_remove_file_checksum file
# | arg: file - The file for which the checksum will be deleted
ynh_delete_file_checksum () {
	local checksum_setting_name=checksum_${1//[\/ ]/_}	# Replace all '/' and ' ' by '_'
	ynh_app_setting_delete $app $checksum_setting_name
}

# Create a dedicated php-fpm config php7.1
#
# usage: ynh_add_fpm_config
ynh_add_php7.1-fpm_config () {
	finalphpconf="/etc/php/7.1/fpm/pool.d/$app.conf"
	ynh_backup_if_checksum_is_different "$finalphpconf"
	sudo cp ../conf/php-fpm.conf "$finalphpconf"
	ynh_replace_string "__NAMETOCHANGE__" "$app" "$finalphpconf"
	ynh_replace_string "__FINALPATH__" "$final_path" "$finalphpconf"
	ynh_replace_string "__USER__" "$app" "$finalphpconf"
	sudo chown root: "$finalphpconf"
	ynh_store_file_checksum "$finalphpconf"

	if [ -e "../conf/php-fpm.ini" ]
	then
		finalphpini="/etc/php/7.1/fpm/conf.d/20-$app.ini"
		ynh_backup_if_checksum_is_different "$finalphpini"
		sudo cp ../conf/php-fpm.ini "$finalphpini"
		sudo chown root: "$finalphpini"
		ynh_store_file_checksum "$finalphpini"
	fi

	sudo systemctl reload php7.1-fpm
}

# Remove the dedicated php-fpm config for php7.1
#
# usage: ynh_remove_fpm_config
ynh_remove_php7.1-fpm_config () {
	ynh_secure_remove "/etc/php/7.1/fpm/pool.d/$app.conf"
	ynh_secure_remove "/etc/php/7.1/fpm/conf.d/20-$app.ini" 2>&1
	sudo systemctl reload php7.1-fpm
}

ynh_install_php7 () {

  ynh_package_update
  ynh_package_install apt-transport-https --no-install-recommends

  wget -q -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
  echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/php7.list

  ynh_package_update
  ynh_install_app_dependencies php7.1 php7.1-zip php7.1-fpm php7.1-mysql php7.1-xml php7.1-intl php7.1-mbstring php7.1-gd php7.1-curl php7.1-soap php7.1-pgsql
  sudo update-alternatives --install /usr/bin/php php /usr/bin/php5 70
	sudo systemctl reload php7.1-fpm

}

ynh_remove_php7 () {
  sudo rm -f /etc/apt/sources.list.d/php7.list
  sudo apt-key del 4096R/89DF5277
  sudo apt-key del 2048R/11A06851
  ynh_remove_app_dependencies php7.1 php7.1-zip php7.1-fpm php7.1-mysql php7.1-xml php7.1-intl php7.1-mbstring php7.1-gd php7.1-curl php7.1-soap php7.1-pgsql
}
