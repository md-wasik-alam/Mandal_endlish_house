@extends('layout')

@section('content')
    <div class="">

        {{-- carosel section  --}}
        <div class=" ">

            <div id="default-carousel" class="relative" class="mb-7" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-80 overflow-hidden rounded-lg md:h-[70vh] lg:h-[70vh]  xl:h-[80vh]">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <span
                            class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First
                            Slide</span>
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUUFBcVFRUYFxcXGhobGxsbGhsaHRogGxsgHSEbGxsbICwkHB0pIBsgJjYlKS8wMzMzGiI5PjkyPSwyMzABCwsLEA4QHhISHjQpJCkzMjIyMjIyMjIyMjIyMjIyMjIyMDIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMv/AABEIAKYBMAMBIgACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAAABQQGBwMBAgj/xABJEAABAgMEBQYHDwMEAwEAAAABAhEAAyEEEjFRBQYiQWETMnGBkaEHFkJSktHSFBUjJDNTVGJyc5OxssHwF6KjNENj4YLC8UX/xAAZAQADAQEBAAAAAAAAAAAAAAAAAgMBBAX/xAApEQACAgIBBAIBAwUAAAAAAAAAAQIRAxIxBBMhUSJBUhQyYXGBkaGx/9oADAMBAAIRAxEAPwC4QQRIs1jWvmt1lv5jFCRHgiYjR0xRIDOMax5K0dMU7NTGsZYUyJBEuXo9agSGYY1gTo9ZSVBmGNYLCmRIIljR0wpvUYcYjTJZSWPTGhTPmCPUIcgZxLmaNWlIUSljhU9OUFhRDgibN0atABJTXCp9UE7Ri0EAlNeJ9UZaCmQoIIU6Y0/KsqkpmBZKgSLoBwLVciGjFydIVySVsbQRWfHazebN9FPtx3sOtkibMRLQJl5ZYOlIHWyod4ZpXQqyRf2P4IIr9s1tkS5i5akzSpCikslLOMnVCwhKfhIaU4x5LBBFZ8dbP5k30Ue3B462fzJvoo9uH7GT8Sfeh7LNBFZ8dbP5k30Ue3B462fzJvoo9uDsZPxDvQ9lmgiteOtn8yb6KPbjzx1s/mTfRR7cHYyfiHeh7LNBFa8dLP5k70Ue3B46WfzJ3oo9uDsZPxDvQ9llgiteOln8yd6KPbg8dLP5k70Ue3B2Mn4h3oeyywQn0PrFKtU5EmWlaVrdioJCaJKqkKJwGUWYaMXeuOl+ktnlE5xcHUvBSElNXEgwROToxZUUgpccT6uMEvRi1EgFLjGp9ULaH1ZBgibJ0YtbsU0xqfVBK0atQJBSwxqfVBaDVkKCJqNGrKSoFLDGp3B8oBo1ZSVulhxPqgtBqyFBEmfY1IQFkhiWDO+/hwiNGmBDjRQdDIopyXwpSj9MJ4caKF5F1NFOTewpSjisZI2PJMa9RGysc44PnXpgG18nstztz9nX2wc7ZRsqTzjg7UxFTWAbfM2LvO3P2Y4HthCgDaqjZSOcMH9dIBXaRRA5yc86dEAN/aRspTzhg+/AY0gBvbadlCecnB2qaChpAAfWHyYxTn1dMJtJEFZKQwYMP5xeHLuL4ogYpz6sITaSUCskBgQGGW6NiLPg52JQC0khwDUdUPSbu0raSrmpxbfgaCkIrEoJWkkOAcOqHpNzbVtBWCcnrvjZGQ4Am5Ve2Fc0Yt24YiPFC5Re2Vc04t24R6TydVbV7AZdvTHhFzZVtFWBy3b4UcrkZz4Tp12bJ4y1fqjRoh2/VGzW4Bc1K1Ll7KQhZTsmpcDGsWhPR2RcdvBkumtKypy0chKMuigQEISVOp0pCUc66KXjtK3w41W0ZMRaJMxaS1+pxCXSaEigVw4GNLsGo1is7GVLK1bwpRLdN1jjmYdWqyoRKKJaRdoSAAyCC4IbCrxZ9SqpCvD5sURkesS/jc/7xX5xrkY1rLM+OT/vF/nDdK6bJ542jtoWx+6J8uVeu3yXIF4slJUbqfKUQlgN5IhlKsFmUhU97TyQVLQEhEszCtd/acG7c2GG8qN3c8VZE8pIUkkEEEEFiCKggjA8YYStO2nlAs2mcFqZCl8qsKuvzSp3YYt1x1SlJ8MjCCXKLdaNT5cuXMUuaq9LM11gy7mwsISkoKr95ZIFAQFFjHO36tWeWuZ8MsiSJqpiAZS5hTLUhIWkS1EIBK6hYBSEKJELpypSJw+MKRKSiYFBM1SieUmEMkIXMO0Lswh9q4SQHERJakICpgtBFpQJyytMwutV9SQUrBe8aFn2wsncXipT9lXjj6LDZNUZSwFcpNCV8mpD8mhSETELWVTErUL10IJIRUpqBC5Wr4RZEWuYZhSSFLCEsOTWVoQpKlC6VFSQSncmYigePkT5RnFabTMU8ycvanG8Fy5YTLUVGYm8S5urvB0quu4IiDabSjkph5Q8qUlBSJiyopE24lB2yhUsISnZdR5pFA41TnfJjxw9D5er1lSq0BU2YlMiYmU61ykXlELJIKqGiQwxxincpHsjTdoQVKRaJyFLLqKZi0lRzUQdo8TELlItByXLslOEXwqJnKQ7RoZ7IbTfU4SF80cm3KGXcv3vlKXrrYFObxW5M+6oKDOC9Q46wYne/czzZTYtyUvHPm407zGynL6FjjX2OdSVE26QxY3xXp2f3jcWfYHPGKu/HHCMT1CQZlrlqOKlpAIADXdosBhgMI2wB/g/KHld/Tvjz+rlcv7Hb00dY0AF7YTRacVYO2NRXf3Qc7ZRsqTzjg+7EVNYGvbAopOKs2p+/dA1/YTslOJzam6OU6AG3zNi7ztz9mOBgBv7SNlKecMH37saQD4Tm7F3Hj2dHfHoPKbSdkJxGe/dAB4De207KE85ODtU0FDQ90DvtiiBinPqwxgBv7YolOKc2r+8Dv8ACYJHk57ujfABB0sHQlYogqonKh3YbjCmG2lg6ErFApTBOTA+rvhTDrgnLkIcaKF9FwULlT8KBoTw40UL6LmG0VP2BoJcBHkmAX9gbJRic2pugHwnN2bmPHs6O+Br+wdm5vxdqQH4THZudb/xu+EKADf2hshGIz37oHv7YoE4pzasBN/bOzc3Z744rtktW2ZiElHklaatXeYAOzv8JgkeTnu/eE2k1XpjgM4FMt37Q1RaUL+EStJI8kKBfdiOnKFWk1XphLM4FMt37Qy5FlwfFhXdWks7HDqh49zb51/ycGesI7CopmJIDkHDqh493aTtKVinJ67qwSMhwD8nXnX92DfnnARyezzr2/Bt3HOB7lU7ZViMuzp7oG5PZTtBWJy3bumFHK3DXRDhKinnv3N62hUIa6Ie6q5zn/tauNMWh3wTjyTxSqKrPOGWePGOFtYIXydQRtcMseuO9f8Ab5/lfvjTHKOFta4vk8G2/wBsevCEQ74EUYjrSv47aPvF/nG3RhGty/jtp+9X+cdOJ0yTjZHkMotXqb9yI7GSGfa/t9rphVfj6RNYuG6w/dF9xe2M+R+1/b7UHJU8reBzcRuO1C/3Uck+in1R77sOSPRT6oN2b20MBJH1v7fapAZI+s2+icvtQv8AdZyT6KfVAm1Ebk+iPVBuZohjyI3XuxOT+dHCcQCwfrb9jEFUxy+ceX43cx4yZfj1CiSAKkkADMndEK/Fo1V0Y55ZYoHCOnAq6t3blDKViuCirZfvB9o1p0tHzaFKKvrEN+au6NLZ/gsvK78OvOK1qVYLkpRUGE0jaySl24VL90WVn+D8geV39GNI4M0rkXxqog1/4PC75WbUw6890BTymxzbm/F2pARe2DRKcFZtTfTf3QEX9lWylOBz3b6YRMoHyn1LvW/5ZQPf2+bc3Z7+EB2+fsXcOPb0d8BN/aVslOAz374AB7/wmF3yc2rj15QO/wAJg3k57sevKB722aKTgnNq7674Hc8oaLGCc93TvgAg6WS6AvC8pruTA+qFMNtLB0BZooqqnKh690KYdcE5chH1o3SCeXNmWWStKVoP1w4Ka5hm+zxj5ima4WopmhKaG4kvvFVYcYpjhu9Scp6KzQNMadlShcWSVJwSlnO7aJokNX9oqmlNbJ83emUlOF3HrUro3NFM9+CA0wXsi7E9L49P5wrtduXMLqNNwGAjqh00VyQn1DfA60hp4zC6lLmkb1KJH91YXG1zJigEglRwShLnOgFTC6/DTQ9vlyVFZvEkFJTddJDg4haSKpH5EEEiOnSMV4RDaUn5ZEVNJNSX4vGj6mLKrIkkk7S8a+VGdaStKJi1TElRK1KUp0hABUX2QFKpU740HUY/E0fbX+qI9V5gv6j9Oqky02FRExJAcvQdUPHu7SNpR5ycWeuAqKxU7faVSpapiSypbKD4UINeEJdJ6+kgqk/BE859pZJxuvQB+viMI4Y4pT4OzuRhyaMdiqNoq529uzD/AKj5CgiiCFA844t2Rg9s03NmEkrVXNRUe0/tHqrHNly5c4q2ZigAyi4dyHo1Qk4E4VaLro39sl+qX0jVRDXRAJSoIot8eDeuFZiXYLYhAWkrTLUAF3lFtnA16WpxEcrVl4umOBWiKLHOOeffHC2kFC7lABtccv3itaV17s8uiErKhiobN7oxVjmBEGz6/ItExMlMhSOUN0qvAvR6i6Hw74ZYZtXXgHlhxY2jBtbv9bafvV/nG8whtmp9imrVMmSby1kqUb8wOTvYLYRsHTBGGQRtniLo/wCj/wCSb7ce+Iuj/o/+Sb7cV3C0YpLLEEh2Ipnwi1eM6Gbkzv3EdFBMApwAHARoPiLo/wCj/wCSb7cHiJo/6P8A5JvtxncrgG0+TPRrOhmuEEgi8ApwWa8HmYvXKm6K1apoWtagLoUokDJy7UjZ/ETR/wBH/wAk324PETR/0f8AyTfbje4nyCSXBiUEbb4i6P8Ao/8Akm+3HqdR9Hgv7nwzXMPcV1jO4jbMl0ZowrZSgyPz/wCuMXfVpKeUTLmG5JKhfV5g/Z2Z92O6LgNXLL83/ev2o6y9CyEi6mWw+0r1xTvQUaVkJRnKVui5S0pCQhDckwZQwA3MRRt0ff1DzNy+/HDGKzYk8km5LKkp828op7FEgRLNumXbt6mTD1RxuPo6FMd47CqIHNVg7YVNDR+yAi9sr2UjmnB92JoaQkVbllISVUGFB6oF26YoAFTgYUHqg1N3Q7O3z9lubuftx3dsBN7aXsqTzRg/UcawkmW+YpnVhhQeqPV2+YoglTkYUHqg1DdDp720qixzU4O1RQ1NXgd9s0WME59WOEJFW+YSFFVRhQeqA2+ZevXqjew9UGrDdE3SwdAUaLKqpyod2OXbCmOs+0KWXUX6h0bo5RqEbthFA17mhE8E/NpbtVF/jMPCKr42B/xI/UuOjp38iOVXEXDQ9oWR8HUgGq0Br126FOrYJvpZKmJvBgXj6ToG1EA8kQ4BqpCWdmCryhcJvBkqYl6COY1imu5TKUSEhd6Wk8oUtdUvzlJu0PEu94u9tWkLddI90O0q8FNcW5uuhBBe8oS3B3kGgvV6nOS9E1CLEnvJad8ojF7ykJugJUp13lC4LqFEFTAhJIePE6EtJIHJKBMxUoXilLzE4oBUQCrhv3PDqTPtSKInygrm3wkX5gQlUsXlmqlISVgP5u8tHzatI2lIU8xHwS0TwDKQHmX5k6+k3is7V4b+fUJDmM7kv4/2b2oiC1WGZLSlSwkJXzWWhT41AQom7Q7WBzjRtQz8SR9uZ+qM3tWmJs2TLkLI5OUAEYuAHFatvyjRtQD8SR9tf6onnbcPPs3HFKXgY6yLu2ScckfuIz/3olqJJtckY4qTWj0ZRo/cRvdIvmtZ+JT/ALH7iMrslqmIBuNtFOISapLjHjB096umZlScvKG50PL2rtsklgpnUE3iKXReVQkjE0Yggl6eWjR6EJJFqlTOTUm6hKgb19bOjayAUaUcPC/3wms2ywF3BODN04FuoZRHmTVKmBa8VKGDcBgMIvb+2T1X0jbjFG8IE8pmSmJBuqIYs1cYvJija+W0yp0ogJLyzzkvgsGmWH8pHFh/ejoyq4lNVNJJJLk4mGeq6/jkn7f7GPvxgS/NGQ+BljDoOLAeqle+hNKmZa5KAlARyiSGQlJDJV5u51HujunNuL8fRyxxpNOzTYzPTVhmzLTNKEggzFgOtCXYh6KUCzqSHwdQGJaNMjMdM6REu0T0vNCuVWdhakCqbrsCzh8qszsY5OmbUnR0ZoppWcV6AtQDmSwwcrlgCj1JVTrzbGPFaEtIxlEUSXKkJDKCiHJUwok44UBqQ/E6WQ94cqlSb1xXKLJReTVtoEVyNRi8RrTpNZJCFzEyywCDMUQAwpjWojtUpHM4RR9WuzrlLKJibqgxIcFnruJh3qHOULfJKcSVD0kKG/pisTrSpZvLUpRzUSo04mLHqDLKrZKIxC0gdrnuEZlfwd+gxx+ar2bfXd8rv/mGDRxtbXFtz7pv9G/hi2EduA+V3n+Uwjja2uLA54SbxzG/vaPGR6jEMP7K9xPJ43Rf7OPXhCCH9kcoTydCEi/xpx64aQkTqG/2+Z5X8NcMog6U0fJmoJWkcmkEqXgpDVJCjtCnVE4VqiiBzuPbwisa7aQuy0ypZZMwuscE99S3omNxpuSSNm0otszPS0xphAJ5ME3CaOHxIziAAZmCkgM7EsWch+1J7I80zbOUXcRVKHFN539UQQV7r3f/ADdHrR8Lwea0m/JLmSSkA3kF3Zi5LBzuyrGsaL+Rlfdy/wBIjG1FbHnNvx/m6Nj0V8hK+7l/oEc3UtuKsvgik3RVtcLLytqlIvN8EpVAVKN0qN1CBzlFqCFkvVq8H5ZCdknaSz7KVbLnaG0zgHaSoNQx9eElTTpX3f8A7mK1ZbdLQkBUpKyF3nJZxdYJNMHrFMbeipiyinJ2ixDVwEqAtMspSVArAF0XQkkFV66F7VEuxCVFwxj5mauFAJVOQKrFBeOxMCE3heBTfBvDgDCRGkpQAHIILAByqpZLPhi4c59NY42u3IWAEy0oYkuGcuTSgFA/dDpy9i6R9F21UsfI22bKKiq5LNSkpd1IOBOFYusZv4Nj8ZmZckf1ojSI4+ofyL4lUfARlnhIPx0fdI/UuNTjKPCYfjg+5R+pcLhfyKSVornJK4dojzkjwrxEcE2hWZPSS35x092K4d/rjq2ZPVH1yJ4doj65FX1fSHrjn7sVw/u9cee7FcO/1wWw1R0VLID07RGq+Dw/EkfbX+sxkKpyiGKiR0mNc8HP+hR9qZ+sxLM/iNCNMYa2n4lP+x+4jJLPaAlNVVyc/tGta4H4laPsH8xGPyJyWAvN0v3Mf5WDC/iwnG2TVTGDvTpV6o4LmhS0MXqM8+Ij45dLc7vV6+MfC5wK0MX2hm2PHfFdhNDejGe+EYPPkfdqz87hGhGM48JiyJ8hsTLVnXa4VjkxP5lZK0Vi6nId/qhlq0ALbZ2b5Tj5pzhQlZyY8Avq3ww1XWr3bZgfPw2tyVedHVKXxZJQ8mxRj+siHtdoq3wisv3IjYIxzWW0hNstAL/KK6PzEQwOpMeatEHkh536fajwy6c6v/j7Uc/dg+t1k+1Hyu1ghnUDwJ76x1bslojwqb+PGi+DmwHlpQZl7Syctkt3EdsUTQliM6ZXmJqrjknr/KNj1Esfyi/KUyEKybaVXHIRPNP4saEfki4N5I+U3q/76I42ogy1pHPSk3jm2Nd9Y7M+wKLGKs9+OMcbUXlrSKKSk3lec1DXEvxjzkdbEMP7KCpCbmyQkX9z078DCCH9kF5CbmzdSL269Thjgcc4aQkTqNqqNlA5wwf+CMq8I+kwJswpoAEy0jiU3if7j2CNVBvbSNlKecML2/AUNIwPwjWy9bJiRQBay3Sph3JivT/uDL5QhkLauz1lu54k8sM057vaj4sugrTMCTLl3rwSQL8sFlglOyVPUAnorHcar228E8jtEAgX5bkHeNuu7tGcdjmvZDtv0clTHBw34AH/ANo2PRH+nk/dy/0CMdVq/awknk2F2/8AKI5pBN5guoYGvCNh0N/p5P3Uv9AiGaSaVDQjRn/hQU0+V92f1mKbLn3VA4tFs8K62tEn7o/rMUyRZpi2uIWX+qW7cIaE/ika4ebG3vyfm0/zqiKi9MVsjpO4cSRvPeXhnozVWZMUAt3OCEC+o9jgdTxo2g9S1gJlqQJSTmAVHpGdMVV4Q/cUfLYrj9IR6gSQiasD5suczeTF8iL7wosk5pY2FIPFlApo+JcF+o5RKjmyzU3aNhFxVMIyTwoH46n7lH6lxrcUbXLU6dbLQJsuZLSkIShllTuCo7kmlYWDplDLb0OdGzbOEi+lJ2S9UhV56PfpcZsId/0ztXzsntX7EH9M7V87J7V+xF+4vYaogJn2Ry8sM9GVKwYY8XfqaE2kZiCoXABQuE83GnB2xanfFo/pnavnZPav2IP6Z2r52T2r9iDuL2FIpV6Nj8HH+gl/bmfqMVH+mdq+dk9q/Yi/ap6JXZLMmTMUlSkqWXS7bSn3gGJ5JpoKPNcv9DafsH8xGN6OsyZhIUu4zbicXqWqwZnY1UI2/TtgNos8ySlQSZiboJwFRi3RGe/0wm/SJfoqghNRQVYiGh5fz4H/AIr9UK1oCJgSC4Ck1ZjVixDliHbqi4/0vm/SJfoqj6l+DKaFA+6JVCDzVbjFO4gSRqBjMvCqspnSCPm1bn8oZxppio65aqTLauWtExEvk0lLKBLuX3RCLp2Bm6NHTizGX6SejKJmqZUNIWdKiKL3NvSTiBkYdf0zn/SZfYuJ+gdQZtntMqcqdLUJanIAU5oRiemLSyJoEjQIxrT9jMy22rbSlpqsSBx3kAdtd0bLGfaZ8H82daJs5M9CBMWVAXVOH3EiJQlqwqymq0QWflJeTOCcWwBJ7sKwus0lS1XU9Z3AZmLuPBnO32pDb9lfrhrZtRlITdTNRxLKc8TF4zi35ZOdxXhWL9VrNeKbMgOtStk5viT0M/R0RsdgsiZUtFmTikc7M84nrrv3xnth1YXLqmYm/uUAoEdEXCw6RmpRcm3V/XS6Ti9UkM/QR0RPPJS/a/AYU15lyO2f4Pyh5We+ONrU6FowKUkk+c1P3iKdJpKAi6WG+j9n/cfE/SIWi5dIYUNK0asc1Mu5IXQ+su2hIBu3Eh/rU/674QwQzVip0WMKC9sbITiPO3x+evCNKWdJWghCmvJIZJI2kJViBmoxsUevDQersHKz8+Bc8JujlQlmu7bM7s2DPWJ8q3LAYyJhJCQo31i+QCHUwqWV1MI3R4Hh3P8AgLMNVpOZdIEmYFFJTevzN4Z/+napjZdDD4vJ+6l/oETXghZSsxsY6NuBBvoSsFTMQCzAZjjEj3uky9kypairA3Eht2Uc9ETbiFFndTdDAevuicByeyNq/vy3RJsePB4hAl/BgDawIDM9MOqPWb4PFR8rL+N3wNd2OcF+Vk9MOqBm+DxB8rLq6s4wYg6WLICMSlT3s3B9fdCmG2llMgIxCVPezcH1wph1wTlyEEEINN6zosswSlS1KJSFOFAYkhmI4Q0ISm6iJKSirY/gin+Psr5pXpj1R54+yvmlemPVFexk9Cd2PsuMEU7x9lfNK9MeqPU6+SvmlemPVB+nyeg7sfZcII4auz/daDMSLiAWJJvEcSAMMi8OPesvzxd89qfnnSIy+LplV5VoXQQxGiy9VgJ3Kah6KwDRZeqwkblEUPRWMtG6sXQQxRos+UsJyJGPRWBOiz5Swk7gRj0VgtBqxdBDBOiy1VBJ3JIqeisRNJyeQkTJy1fJoUu6zKUwenTGry6MaaOUEU/x7l/Mq9MeqJWjtcJc6aiUJSklZZyoFqPg3CKvBNK2iSyxbqyzRT7XrFPE+bLQqzpEtZSOUJSSM8a4RcIyPWbYtk5RUUvMVdI7wTuhsCTbtBkvxRafGC01+EsdPrKyfP8AlIY6taZmz5k1EwyjyaUEGW7G85xJrl0vGaKtZYvNURV9t/8A7Fs8GiwZloALi4j81RXJGKi6QsNtvLNf9zS6JuJKT5TCnXhHvuaW924m757DpxwxpH3LUCkJTWWoA3ukPjhlHqiALhLSx5XfzsMaR551+Dn7mQTdKUhIwUwr14b+6PPcss7JQlAGCmAvbsT2wvtOsNlRsKmpKE4FLrJbikEZxAna62TmqKwkc0hIBO4c45cIdQm+EK5RX2WAWaWpwpCUNgWAvdv8rFfWaHoMfKde7Cui5ikAc3YUe26FR9w2so/uVCuUZcMyXROt81M2Upc6ZMF9F5CiWUCWIxrG8+5kF1FCUkYJYbTcMYr90ZR9RuSW7vgyNRHvuZDX7iQoeQwruwx4xmnhOtk6zTpS5a1y5UxDFCFXbqkqL03OCmpEW6PCIyD1dmyqSoy6XrYlQflp6anGcRu3AIO/jn1itaHXLRLnTiVLQKzSoMVAEEXRn+cahdGUF0ZRXu/wJohvomYUpUUh3Ux4MBl090TgLmyjaCsTlu3RXII56KKVFjAu7CdpKsVZPQ4UwgZtgVQcVZdeG6K5BBqbuNdKlkJQKpCnCs6Hq3wpj2PI1IVuwjLfCRNa2Af8SP1LjUor2ndW7HaZgmT1ELCQlgsIoCSKHpMUxS1lYsopqmU/Res8xcwJTLl3tkspa7mwDS7gJbF0owQdoZRMGsFpmXHEkJuoUQFqSp1Ai8Fh1IUMFAOWWxvYhj4j6N89X4yfVB4jaN89X4yfVFXP+ASXsW2jTU4oN+XZwTJWkFKli4kBLiWQaLvJSsM4F0MKkmv6W1nmWiWELDNMWt7xPPUo3WIfZCrorgkBovSPBzY1B0pnEYuFuOlwmPoeDix43J3pn2YFmSBxTIPgh0oTPmSFHYUgqPQlQ/In+4xrn1f9rP8AlcYz7Qer9lsEwzZZKVKQpG2sEEEpJYFqukRY/f0XbvKSruV4et4hkub2Q0Woqh8WNFfJ+Sfy/eA1ouiBzTnl3QhVpwEXTMlMMBeHrePFacBABXKIGAvCnYYTRjbosBr8pQDm8ezqjw1+Uooc3j2cWhCvToU15cothtCnYYFadCiCqZKJGG0Kdhg0YbofY1XRY5ozy73iHpey8tImy1D4RctaUpzcFoWq08CQTMlEjA3hTsLR1l6SmL2klKjgFJD9jUg1a8hsn4MDtaTJmKRMBpxYtuOH8rE/VS0BVukBIIBXgS/knfGjaT1NkWhalzUTVTFEqJBYucTRPdHHR+o1mkTETUJmhcsuLyiQKNUNxjredNUQWJLyyxREtWpkqehSxWbMKipxeSxNE3Th0ir9US4fWN7ieT5zC9/D+0c27jwVUVLkx3SngrtLk2dSFjK/h1qY9x6Ybaj6rWmxKmrnhAEwICbqwqqSSXbDERqQ/wCLDy/4rrwhfpa6yLnNc54tx4RvccvDN1SRULDriJEsyFAKYkIJLAA7lHgcMxSm9DpvTylfKzCpOKUDDqSKAPvPbFX0paggkYkk068TCdE8FW0ab/5uEdyxQi7OTaclQ4tOllroNlOQx6z/APIhGbHXlrLmrjQ8PrdPdEG0zkXtg068znwbreKxmlwI8bfJJEyNqtBZCiNyVHujBxMjdrX8mv7Cv0mOfqZXqUww1szPR+lZswG9bVy2IAdeLgl9paRuA6VB2FYmrtCx/wDpuWdnWGwdyVbiTTFklgTSKAi1MxdiGMOLFaLXNOwVV8ogJTiTiQxxOGZzMUcl9f8AECx1yWlc5YIB0mWN5jeU1M3WGcENj1Qz1Et8yYqcJkxa7oQ15RLOVZ9ELdE6rzrQyWVMXXaOyhDs7HAlhxNMItGhNAGxTJstRvFSUG9gDzqNub+YxHJNatfY8IU7HbQNFil4C78owfobjTBo9D+R8p5X740xbCOPY6NCuNHhMWQf8fP8r+KpjlGYeE+ZLRapS1IK5fJFLOQyrymPHo4Q+NbyoWfxjZarwzEF4ZiMulaRsayQLKMHdU1SaBiQOLAtxO6JBmWSjSZTggfLkhW3U3RmnAA0Cnqxbo7C9v8AwQ7j9GlAwRQtU5ks25XJpCU8i7BV5jsPXN4vsRnDR0UjLZWEZ3rrpNMm2G8kF5KGdIV5a8yP50RokQ7VouRNVemSZUxTNeWhCyw3OoO1e+MhLV2a0nyZWvWZJBCZcskhgDJQBU/VL1BPc2940+3TJ60SzLSlZUboSi495hUbwGp1xrHvBZPosj8KX7MfcvQ9nSXTZ5STmJaAe0CLLqK+hXjTLLoazGVZ5MtOEuWhK+JSkA/kYm41RRA5wzz7or6J6wGClAZAmAT1gNfU2TmOZq3ZZSSM+8KE+4LPx5Xu5OF40shKlAybKqqjtLQzXRRIEsHeQl/MqCdpWi2uwSprcpLlzbrtfQlbPi14FnYdkRfeCx/RZH4Uv2YvHLUUiWquyhzNNS0BS1SLGqpUAkhilmCQLjlTHFwPqiFitZ5TFIsssAoKaXXBISkLvFBLgJ6ytRo8af7wWP6LI/Cl+zB7wWT6LI/Cl+zGrMGiMgk2pJSKDflH37pTkO6Nc94LH9FkfhS/Zg94LH9Es/4Uv2Yb9QL2omPT7Uncz5DHsEbl4P7CZNiloWGmrvTE8As0rhgO+ICdB2VJcWaQDmJUsH9MMZaykAJJSE0ABYDgGwieTK5qhoQjF2iwzCpiEgGcxZywJxAKgCwajsYWpmTymYJ0uUhQAqiYpZVneCpaQKNg8Q/dC3e+p87xftjxU5Rd1KL41NemIpFHI+IqWkfCTMs02ZJRKl/BqKbzqdTbzVotsQZ2hbMtRWuzyVKUXKlS0Ek5kkOTDwcU/krFaf06IujPCGlTBUkoBxuliegKcGmSoeTdMyJ5CZCryUi8rEMSWAINQWGHRCkaAsn0WR+Ej2Yl2axy5bmXLQgnG6lKXbNhWB6vylQJvhswO22gqmLJNbyvzMOdD6wXeTlmXIAQOctJLsoq2g4BcntCTujWVaBshqbLIJP/ABS/Zjz3gsf0WR+FL9mKPLfJqSRnQ1gDlT2Ol0gcmpnSq+3Ochycd4GDvES16zcmRcl2dQILhCCB/uCu0Q5MwqcZJHkiNQ94LH9EkfhS/Zg94LH9FkfhS/Zhd0FowdM3CP0WEvQhwaMcC+4ws94LH9FkfhS/ZhmDGTnsHgkp1SsKSxsslKzzSlATwHNbfHxNTYLMq5M5CXOABF8pcA4Ha6D2R8m0LJcrU433jHNaiouoknM1PaYRN/bNbXof2eclaEqQpKlKSFIWkgpKSHBSRQi7EHTDbL88PeOeEQRPWC4Up+kx8rWVc4k9JeFoHK0WCXgAn5Rg54N2YNH1U0RSYOcc8+GLRX0z1guFqfNzALQsFwtT53jBqbuWAVpLooc7j28YpvhH0SmfZuUTTknvE8cDXFlBmG5Rhkm0LFQtQf6xjlOQFhlgKGSqjvhofGSYs3sqMGm2ooN1SQCN379EEi1FZZKRniB+cbXM0LZlc6zSVNnLQfzEfHvBY/okj8KX7MdDzCKCryUHwerJtygaNJXvB8pGRIjUIh2XRUiUq9Lky5ama8hCElsnSHandEyIzls7GSoIIIIU0IIIIACCCCAAggggAIIIIACCCCAAggggAIIIIACCCCAAggggAIIIIACCCCAAggggAIIIIACCCCAAggggAIIIIACCCCAAggggA//"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://www.shutterstock.com/image-vector/business-webinar-horizontal-banner-template-600w-2041227701.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-3.svg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>

        {{-- card for course  --}}
        <div class="  w-full px-4 lg:px-24 md:px-16 ">

            <div class=" lg:mt-10 md:mt-5">
                <h1 class="text-3xl font-semibold underline">Our Cources</h1>
            </div>
            {{-- single card  --}}
            <div class=" gap-3 grid grid-cols-1 lg:grid-cols-6 md:grid-cols-4 sm:grid-cols-3 p-2">
                @for ($i = 0; $i < 13; $i++)
                    <div
                        class=" w-full p-2 bg-gray-100 mt-3 mr-2 rounded-lg hover:shadow-sm-light hover:shadow-green-300 border border-gray-300">
                        <img class=' flex justify-centerw-50 rounded-full h-50'
                            src="https://picsum.photos/400/400?random={{$i}}" />

                        <h1 class="text-center my-4 text-black h-14">this id</h1>
                        <h1 class="bg-green-300 text-center font-bold rounded-md text-gray-700 p-1">Duration:</h1>
                    </div>
                @endfor

            </div>


        </div>






    </div>
@endsection
