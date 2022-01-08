
USE `hkr-tapeko`;

INSERT INTO `products` 
( 
    `product_id`,
    `product_name`,
    `product_type`,
    `product_desc`,
    `product_designer`, 
    `product_price`,
    `product_year`,
    `product_location`,
    `image_url`
)
values
(1, 'Svart Jetson 1969', 'Fåtölj', 'Nyrenoverad snurrfåtölj med ny bärande väv och ny DUX original kuddsats i svart skinn Elmotique.', 'DUX', 27000, 1969, 'Stockholm', 'poduct-images/default/default-product-1.jpg'),
(2, 'Klassisk Karin Fåtölj', 'Fåtölj', 'Ett renoveringsobjekt som fortfarande går att använda som den är. Original av Alf Svensson 1950-talet', 'Alf Svensson', 18000, 1950, 'Göteborg', 'poduct-images/default/default-product-2.jpg'),
(3, 'Fåtölj Pernilla 303', 'Fåtölj', 'Nyrenoverad snurrfåtölj med ny bärande väv och ny DUX original kuddsats i grå väv.', 'Bruno Mathsson', 31000, 1969, 'Göteborg', 'poduct-images/default/default-product-3.jpg'),
(4, 'Ritzy soffa', 'Soffa', 'Fusce dapibus, tellus ac cursus commodo, tortor mauris', 'Bruno Mathsson', 42000, 1970, 'Stockholm', 'poduct-images/default/default-product-4.jpg'),
(5, 'Hans Wegner 3-sits soffa', 'Soffa', 'Samtliga dynor av hög kvalitet, resårdynor och nyrenoverade. Stoppningen är skyddad av en kraftig bomullstwill. Synliga trädetaljer är i teak.', 'Hans Wegner', 41000, 1948, 'Göteborg', 'poduct-images/default/default-product-5.jpg'),
(6, 'Vackert träbord', 'Bord', 'Stomme av ek, detaljer i teak.', 'Källemo', 10400, 2000, 'Malmö', 'poduct-images/default/default-product-6.jpg')
(7, 'Fåtölj med fotpall', 'Fåtölj', 'Ett renoveringsobjekt som fortfarande går att använda som den är.', 'Alf Svensson', 18000, 1960, 'Stockholm', 'poduct-images/default/default-product-7.jpg'),
(8, '2-sits lädersoffa', 'Soffa', 'Fusce dapibus, tellus ac cursus commodo, tortor mauris imsum ipsum.', 'DUX', 38150, 1935, 'Uppsala' , 'poduct-images/default/default-product-8.jpg'),
;
