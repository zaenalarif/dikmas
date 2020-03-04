@extends('layouts.index')
@section('title')
    
@endsection

@section('content')
        <div class="container-fluid">
          
          <h1 class="h3 mb-2 text-gray-800">Home</h1>

          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <img src="data:image/jpeg;base64,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" class="rounded mx-auto d-block" alt="..." width="400px" height="300px">
                <br>
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHUA2wMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABgIDBAUHAQj/xABEEAABAwMCAwUGAgYGCwEAAAABAgMEAAURBiESMUEHE1FhcRQiMoGRoRViIzNCQ7HBJFKCkqLwJUVUY3Jzk7LCw9EW/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AOr0pSgUpSgUpSgUpSgUpSgUpSgUpSgUpVDzrbDZcecQ2gc1LVgCgrpWK3MaeQp1h5p1CPj4FZKfWsqgUpSgUpSgUpSgUpSgUpSgUpSgUpSgUpSgUpSgUrxa0toUtZCUpBJJ6AV424h1tLjS0rQrkpKsg0FVKUoFKUoFYsgoRKace/VgEJUeSVHG/ltkZrKp60GsuK0OraeZTkh1CHHByKFKCSnPXmPTFeagv8DT8VuRcFrHeuBtptCSpbq/ACqbhObVOagNJcedQQ8622nPCBukE8hk77nkD4jMfvJterbk1an5QjTIqne7QlSuMn4HOElOCRg8jkc/A0G3teq4c3Sy9RvtriwkhxeFEKVwJJHTqcchnnXmkNSDUzU59ERcZuNJ7hKXFArV7qVEnHL4uXTFaG8TrNZWGtGPsFEFTbLZU2M8HGo8JOckgqTvt15YrYTHoPZ9YgmHDLqpMlRHePgd88oZJW4RgE425Dagl1KjGidXtanakNORHIVxjH9NFcVxEJ6KBwMipPQKUpQKUpQKZpSgUpTIwTkYHM5oFK0EvWVgjOqZE9Ml5JwpqIhT6gfRANWVa1tyT70C9geP4U/j/toJLStBF1pp2S4lo3JuO6o4S3LSphRPosCt8lSVpC0KCkkZCgcg/Og9pz5UqK9p17esOjZ0uIrgkr4WWljmkqOCfkM/agqvuvtL2Z9cOfcgp4e6tplBcKfI8OwqKdlEyyQrjOjW+9MvNPBIZjELaWsgkg8ChjiwcZSTn1rcaW7MbBbLU0LpBbnz3EBTzj/vAK8EjkAPrUf7Quy+ExbXrvphpcaRGBdcjJJKVpG5KOoIxmgl2gNTyr+3OZns8L0ZziSsDZTa1KwD4KSUlJ9KltcXsXaE+1o5DjDDZuqZeJboRgvIQkucR8VKShSc+RNdmaX3jaFgEBSQoA8xmgqpSlArWSpTsyW5brc4Uqbx7VJGD3AI+BPQuEb46AgnmAV6nusBmFb+FVxlkhgK3DaR8bih/VSPqSkdayrdCat8VEZjJSnJUtW6lqO6lKPUk7mguRIzURkNMI4U5yd8lR6kk7k+ZqES9ES2daxL7b5CHIwnGQ8w5stvjTwr4TyIOxx5VPKUEa1Zo2DqJ1qUtxyPNZCQh1s5CglXEEqB5jIz4itzdrbDvFuegXJlL0Z1OFoP8R4GsyrM2W1BiPSn892ygrUANzjoPM9KCEMQNLaPuBVCtlweciJAkTEFTqYiSM4USdhjcgA4G5FTxKgoBSTlJGQR1rQtWed+HtJS+03Iebc9rK0lWFubqUnB3I5DPQD0O7jMojR2mG88DSAhOTnYDFBcpSlApSqeNHed3xp48Z4c748aCqlKUGPPmsW+I5KlL4WkY5DJUTySkdSTsBXI9ea4aQ+uNOQqU4P9VtulLLP/AD1p3cV4oHujkc1su1XVa7c0DGUO/wCNTML8qgMOvjzGe7T4HjPhUc7JdBtX0qvl8R3sFCyGGV7h9YO5V4pB+poNbazr3U7WLSHYduGwMZIiR0DyIxkfWsxPZ/eD70vV8Bt3mQZi1Y+dd4S02lpLSW0JbSMBASAAPDFVgADAAA8KDgz2ntcWeKqRCmMX6AP1jSFiUkjqChW/03rY6OvCLm53Om5n4Bekne2PKLkOUR0SlW6D5DlXV51miy1d61xRJYHuSo2EOJ+fJQ/KoEVzzWOj3L2687GQiJqqEnv0ORxwIuCByWnfZYOBz2OM7EGgk9i1q2/cPwbUMVVpvCTgNuHLb/m2rrnwrO1zp8ao01JtaXA26shxpauSVp3GfLp86iml7jbe0iyOWfUscJvED3XDjhcBG3eJPQ5GCPGsli8XvQpETUyXbpZE7M3ZtJUtodEup5n1/j0C+3q3USmG7YvSlxTeiA2Xigeyg8u84+WOuKm6UhLIQ4rjAThaj+1tv/OsO33u13GOH4FxivtEZCkOj7+FQbtK7RoNqtz9ts0lEi5PpKC40rKY4I3JI24vAUEZ7HGoatSagbdQyYTSe9T3gHCjhWcK8sAmp9Ov+qX2zMsGnWn4I3R7S/wOvp8UoxsD0zv5VDezTTL8KyNpmtFDt+fQChXNERoFaiR4L2T6KHjXRI1z7y+3FEq4JiNwVJSmIrgSlbRQFd6Sd+ZUBgge6aDJ0zfo2o7UifFQtv3i26y5stlwfElXmKzbhNYtsF+ZLXwMMoK1kDJ26AdT4Cov2fYku3+6sJKIE64FyMopwFpCQCsZ6Eg1F9T3C+68vSLbpIcFrgPBTtwUcNLdHIg9QnoBnffwNBIk6jt1kW5cL68o3meAW7cyO8eYa34GggcjzJJ5knwFVJv+qLrvAtkGzMq+Fy6yMukePdJ5ehNYenuyu3W5xUi53GbPluburDqmkqPXkeI/M1I0aM0ykZ/Abes9VOshaj6lWSaDBZseopOXJOs3d/2YMNlCR8yFGr6dOXNPLV14z4qQwf8A117J0nYIrRfioXaVI376E8pjh+STg+mDmsL8VvlnSn8ULbtrWvhTdXmSHGk9C60kjb8+RjmUigzJVv1TFj8VuvjM1xJ/VzoaAVDyUjh39R9KwIk27SZbbF49ieW2sLTDKjEVkcjwqCg5g8iFYz5gVJg1PCQtEyO5tnhVHICvQhW3rvQ9zOCotxiN8ZGS06A4hQ8Unr9j5UHiZ0n97a5ST+VTah9lVeQ+6vlFcT5rUkAfc1jItDTQ/ocmZGT0Qh8qQPRK8gfLFXExJY2/FJB9Wmz/AONBmDON+de1iCG+f1lxkq/4UoT/AATXogMndxT7p/3ryiP7ucfag0+vpFyj6ZkCzOKamOLQ2HUjJbSpQClfIZqP9lFquMV693K4NSUImLaRHMvi71aEcWVHi334utaXUmqLlYtZyo0cNpYYlM/0VbSeF2OsJBKdsghWdx/W3ziuh6uXLiabuUm0jhmMslxvhHxBO5G2+SAaDc9P50r52j6wvNslx7/bbrcJdvUsJkwpchTvcq5lBzzBHwrx5cwc/QkOQidEYlxiFsvtpcbV4pIyKD577ULfdZWrlNmBLTDa7uLFdW0eFQ8c8slRJ+dd9s1uatFph26OnDcZpLYHoNz9azKUClKUCtVqKM45CEuGkmbBPfsAft4+JHopOR9D0FbWn38qDmWuLBI72LrvRo/pqEJfebQNpDZA3x1ODuOo86mOktSQNW2VM2IUk7IkMK3La8bgjqPDxqvSquGDIif7HNfYSPBAWSgf3SKimptGXG13NzUuhHBHnHJkwf3cjqcDlny+mDQba6dmulLksuLtgjrPMxVFoH5Db7V5aezfSdne9qbt6XVt+8FSnO8CcdcHao5B7ZIgIj3m1PwpifdcClHgSrzGCofQ1nO9oGmZYSu7XppTAORCjMuKSo/nJTlQ8sAeINBL7Yj2ya5dVpIbKO5hgj93nKl+XEQPklNVXmzWW5JTJvUGHIDAJDsltJ4B13PT7VG066l3UlvS+mrlLPJMiWkR2PUE7kVda0ncb44l/W09EhAIUm2Q8ojAjccXVZ9aChUh7WqvYrSHIumke6/LQOBUsDYtteCPFXyFS+FEjwIrcWEwhlhpPChptOAkelFuRoTKUrWzHZSMJCiEJAHQdKjetphn6bkRrLMLj7pSlQiLSp0oz7wTvzPL50EnLraVpQpxIWr4UlQyfTxqskAEk4A3JNcz7J9HyrPMmXS424wnFJDMZDywt0jmpSjy3wB9fnPbxhxhmKeUp5LSvNOCpQ+aUqHzoPIifb1pmvJ/Q84zahyHRZ/MengPnV1ibBuSXmWn2JOOJt1vIJHQpUP/ALWYc53rjesNH3dnWci6W+E8UPPiRGmRDlTThAylwc+HOdxyB68qDo+ngu3yplicUpTcXhdhlXP2decJ/skFPpw1tZoHcKd/aZ/SJUOYxz+oyK1T5UNWWkk8KnLfJDgHXCmcfcn61tpZyyWh8To4R5Z5n5CgvedKUoFKUoNZe7Ba760EXOG28Ufq3MYW2fFKuYrZcIKOFXvAjBz1r2lBzqd2RWh2XIft9wmwUPk8bCOFbeD0wRy8jmt5ZdP3uyWuPbYV8ZXHjpKWy9FJVw5JwcK6ZxUppQKUpQKUpQKfz2pSgjuk1E3LUyeibsoD/pNZ+5q3ddfabtUtcSXcQXW1cLndNqcS2fBRSCAaq0ylXt2qW0K4HPxNR4vNTLZSf8+FWdCNQW7Ci1LgqalMJ4JzT8dQ43P2lFRGFBR3zk5BoL9401pzWEdia8y0+VJCmZsZfCrHQhQ5+hzWBH0pe7Wr/RN8iuN9EXC3IWof20cJ+ua1/Z6r8I1dqTSzCiYEVSZMZGc90FY4k/4h9DXQqCOJi6yVgOXeyoHi3AcJ+7lZCLHMeJNyv06Qk822AiOj/AOL/FW7pQYESy2yIrjYgtBw83FjjX81KyfvWatCVp4VJSoeBGaqpQcs7TdP3uTdGXoMedLiLA7lUN0hyI4Py5wUnn4jfcVJrLKvP/5+BJ1LFXGlwJCS64pSf0iClTfGcE8JAXk+lS2vFpStJQ4hK0KGFJUMgig95bdfCnI1qERrrb093b3GJcYDCGpa1IWgeAcAOR5EZ8zVLkK73JPd3GQzDinZxiGpSluDwLhAwPQA+dBTbj+JXqXcUZ9mYT7JHUP3hzlxQ8shKf7JrcIbShRUMlRGCpR3owy1HZbYYbS202kJQhAwEgcgBVdApSlApSlApSlApSlApSlApSlApSlBCNUT39HX46g9ncftE5tDU8NfEw4nIQ4B1BB4T6CrFx7XdLMQ1Own3pj+PcYSwtBJ8CVDA+9TxxtDram3UJW2oYUlQyCD0IrUQtJ6egyvaollgtPg5C0sjKfTw+VBHOy2y3JpFx1Ff0cFyu7gX3ZGChsbgY6Z8PADNTz1p/nNKBSlKBSlKBSlKBSlKBSlKBSlKBSlKBSlKBSlKBSlKBSlKBSlKBQUpQKUpQKUpQOtKUoFKUoFKUoFKUoFKUoFKUoFKUoFKUoP/9k=" class="rounded float-left" alt="...">
                <img src="data:image/jpeg;base64,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" class="rounded float-right" alt="...">
              </div>
            </div>
          </div>
        </div>
@endsection