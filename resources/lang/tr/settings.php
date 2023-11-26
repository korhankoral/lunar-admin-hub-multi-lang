<?php

return [
    /**
     * Channels.
     */
    'channels.index.title' => 'Kanallar',
    'channels.index.create_btn' => 'Kanal oluştur',
    'channels.index.table_row_action_text' => 'Kanalı düzenle',
    /**
     * Channels show page.
     */
    'channels.show.title' => 'Kanalı düzenle',
    /**
     * Channels create page.
     */
    'channels.create.title' => 'Kanal oluştur',
    /**
     * Settings layout.
     */
    'layout.menu_btn' => 'Ayarlar',
    /**
     * Staff listing page.
     */
    'staff.index.title' => 'Personel',
    'staff.index.search_placeholder' => 'Arama personeli',
    'staff.index.active_filter' => 'Etkin Olmayanları Göster',
    'staff.index.create_btn' => 'Personel Ekle',
    'staff.index.table_row_action_text' => 'Personeli düzenle',
    /**
     * Staff show page.
     */
    'staff.show.title' => 'Personeli Düzenle',
    'staff.show.delete_btn' => 'Aktif edilmemiş hesap',
    'staff.show.delete_title' => 'Personeli Sil',
    'staff.show.restore_title' => 'Personeli Geri Yükle',
    /**
     * Staff create page.
     */
    'staff.create.title' => 'Personal Oluştur',
    /**
     * Staff form.
     */
    'staff.form.create_btn' => 'Personel üyesi oluştur',
    'staff.form.update_btn' => 'Personeli güncelle',
    'staff.form.permissions_heading' => 'İzinler',
    'staff.form.permissions_description' => 'Bir personelin bireysel izinlerini yönetin.',
    'staff.form.admin_message' => 'Yönetici kullanıcının tüm izinlere erişimi vardır.',
    'staff.form.danger_zone.label' => 'Personeli kaldır',
    'staff.form.danger_zone.delete_strapline' => "Bir personelin kaldırılması hub'a tüm erişimi durduracaktır; erişimi daha sonra geri yükleyebilirsiniz.",
    'staff.form.danger_zone.restore_strapline' => "Hub'a erişebilmeleri için bu personelin hesabını geri yükleyin.",
    'staff.form.danger_zone.own_account' => 'Kendi hesabınızı kaldırmak, anında çıkış yapmanıza neden olur.',

    /**
     * Addons listing page.
     */
    'addons.index.title' => 'Eklentiler',
    'addons.index.table_row_action_text' => 'Görüntüle',
    /**
     * Addons show page.
     */
    'addons.show.title' => 'Addon',
    /*
     * Languages listing page.
     */
    'languages.index.title' => 'Diller',
    'languages.index.create_btn' => 'Dil Oluştur',
    'languages.index.table_row_action_text' => 'Dili düzenle',
    /**
     * Languages create page.
     */
    'languages.create.title' => 'Dil Oluştur',
    /**
     * Languages show page.
     */
    'languages.show.title' => 'Dili düzenle',
    /**
     * Language form.
     */
    'languages.form.create_btn' => 'Dil Oluştur',
    'languages.form.update_btn' => 'Dili düzenle',
    'languages.form.default_instructions' => 'Bu dilin varsayılan olup olmayacağını ayarlayın; bu, geçerli varsayılanı geçersiz kılacaktır.',
    /**
     * Currencies table.
     */
    'currencies.index.title' => 'Para birimleri',
    'currencies.index.table_row_action_text' => 'Düzenlemek',
    'currencies.index.no_results' => 'Şu anda sistemde herhangi bir para biriminiz bulunmamaktadır.',
    /**
     * Currency show page.
     */
    'currencies.show.title' => 'Para Birimini Düzenle',
    /**
     * Currency create page.
     */
    'currencies.create.title' => 'Para Birimi Oluştur',
    'currencies.index.create_currency_btn' => 'Para Birimi Oluştur',
    /**
     * Currency form.
     */
    'currencies.form.update_btn' => 'Para Birimini Güncelle',
    'currencies.form.create_btn' => 'Para Birimi Oluştur',
    'currencies.form.notify.created' => 'Para birimi oluşturuldu',
    'currencies.form.format_help_text' => [
        'This allows you to specify the format that price fields should use for this currency.',
        'When displaying, Lunar will swap out <code>{value}</code> for the formatted price. E.g. <code>£{value}</code>.',
        'You must always include <code>{value}</code> for this to work properly.',
    ],
    /**
     * Attributes.
     */
    'attributes.index.title' => 'Öznitellikler',
    'attributes.show.title' => 'Düzenleme :type nitelikleri',
    'attributes.show.locked' => 'Bu özellik sistem tarafından gerekli olduğundan düzenleme için kilitlenmiştir.',
    'attributes.create.title' => 'Özellik Oluştur',
    'attributes.form.update_btn' => 'Özelliği Düzenle',
    'attributes.form.create_btn' => 'Özellik Oluştur',
    'attributes.form.notify.created' => 'Özellik Oluşturuldu',
    /**
     * Tags.
     */
    'tags.show.title' => 'Etiketi Düzenle',
    'tags.index.title' => 'Etiketler',
    'tags.index.table_row_action_text' => 'Etiket',
    'tags.form.update_btn' => 'Etiketi Düzenle',
    'tags.form.create_btn' => 'Etiket Oluştur',
    'tags.form.notify.updated' => 'Etiket Oluşturuldu',
    /**
     * Activity log page.
     */
    'activity_log.index.title' => 'Activity Log',
    /*
     * Product Options
     */
    'product.options.index.title' => 'Seçenekler',
    'product.options.index.create_btn' => 'Seçenek Oluştur',
    'product.options.index.table_row_action_text' => 'Seçeneği Düzenle',
    /**
     * Taxes.
     */
    'taxes.tax-zones.index.title' => 'Vergi Bölgeleri',
    'taxes.tax-zones.confirm_delete.title' => 'Kaldırma işlemini onaylayın',
    'taxes.tax-zones.confirm_delete.message' => 'Bu Vergi Bölgesini silmek istediğinizden emin misiniz? Bu veri kaybına neden olabilir.',
    'taxes.tax-zones.customer_groups.title' => 'Müşteri gruplarıyla sınırlandır',
    'taxes.tax-zones.customer_groups.instructions' => 'Bu bölgeyi hangi müşteri gruplarıyla sınırlamak istediğinizi seçin. Hiçbir kısıtlama olmaması için işaretlenmemiş bırakın.',
    'taxes.tax-zones.create_title' => 'Vergi bölgesi oluştur',
    'taxes.tax-zones.create_btn' => 'Vergi bölgesi oluştur',
    'taxes.tax-zones.delete_btn' => 'Vergi bölgesini sil',
    'taxes.tax-zones.index.table_row_action_text' => 'Yönet',
    'taxes.tax-classes.index.title' => 'Vergi Bölgeleri',
    'taxes.tax-classes.index.create.title' => 'Vergi bölgesi oluştur',
    'taxes.tax-classes.index.update.title' => 'Vergi bölgesini düzenle',
    'taxes.tax-classes.create_btn' => 'Vergi sınıfı oluştur',
    'taxes.tax-zones.price_display.label' => 'Fiyat Gösterimi',
    'taxes.tax-zones.price_display.excl_tax' => 'Vergiyi Hariç Tut',
    'taxes.tax-zones.price_display.incl_tax' => 'Vergiyi Dahil Et',
    'taxes.tax-zones.zone_type.countries' => 'Ülkelerle sınırlama',
    'taxes.tax-zones.zone_type.states' => 'Eyaletler/iller ile sınırlama',
    'taxes.tax-zones.zone_type.postcodes' => 'Posta kodlarıyla sınırla',
    'taxes.tax-zones.tax_rates.title' => 'Vergi oranları',
    'taxes.tax-zones.tax_rates.create_button' => 'Vergi oranı ekle',
    'taxes.tax-zones.save_btn' => 'Vergi bölgesini kaydet',
    'taxes.tax-classes.index.delete_message' => 'Emin misin? Bu, veri kaybına neden olabilir.',
    'taxes.tax-classes.index.delete_message_disabled' => 'Ürün çeşitleriyle ilişkili bir vergi sınıfını silemezsiniz',
    'taxes.tax-classes.index.delete_message_default' => 'Silmeden önce yeni bir varsayılan seçmelisiniz',
    /**
     * Customer Groups.
     */
    'customer-groups.index.title' => 'Müşteri Grupları',
    'customer-groups.index.create_btn' => 'Müşteri Grubu Oluştur',
    'customer-groups.index.table_row_action_text' => 'Grubu Düzenle',
    /**
     * Customer Groups show page.
     */
    'customer-groups.show.title' => 'Müşteri Grubunu Düzenle',
    /**
     * Customer Groups create page.
     */
    'customer-groups.create.title' => 'Müşteri Grubu Oluştur',
    'customer-groups.form.default_instructions' => 'Bu müşteri grubunun varsayılan olup olmayacağını ayarlayın',
];
