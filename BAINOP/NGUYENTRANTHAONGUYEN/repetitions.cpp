#include <bits/stdc++.h>
using namespace std;

int d, ans;
string st;

int main()
{
   freopen("repetitions.inp","r",stdin);
   freopen("repetitions.out","w",stdout);

    cin >> st;
    d = 1;
    ans = 0;
    for(int i = 0; i < st.size(); i++){
        if(st[i]==st[i+1]) d++;
           else{
            ans = max(ans, d);
            d = 1;
           }
    }

    cout << ans;


}
